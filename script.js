///////////
//Datum
//////////
// Funktion, um das aktuelle Datum im gewünschten Format zu bekommen
function formatDate() {
  const days = [
    "Sonntag",
    "Montag",
    "Dienstag",
    "Mittwoch",
    "Donnerstag",
    "Freitag",
    "Samstag",
  ];
  const months = [
    "01",
    "02",
    "03",
    "04",
    "05",
    "06",
    "07",
    "08",
    "09",
    "10",
    "11",
    "12",
  ];

  const now = new Date();
  const dayName = days[now.getDay()]; // Wochentag
  const day = now.getDate().toString().padStart(2, "0"); // Tag (mit führender Null)
  const month = months[now.getMonth()]; // Monat
  const year = now.getFullYear(); // Jahr

  // Zeit formatieren
  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");
  const timeString = `${hours}:${minutes}`;

  return `${dayName}, ${day}.${month} ${year} / ${timeString} Uhr`;
}

// Funktion, um nur die aktuelle Uhrzeit zu bekommen
function getCurrentTime() {
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");
  return `${hours}:${minutes}`;
}

// Das Datum in das HTML einfügen

document.addEventListener("DOMContentLoaded", function () {
  const datum = formatDate();
  const datumElement = document.querySelector(".datum h6");
  const datumHidden = document.getElementById("datumHidden");

  if (datumElement) datumElement.textContent = datum;
  if (datumHidden) datumHidden.value = datum;
});

//Header anzeiegn

// Removed the separate event listener for showing #infos
// It will now be shown after data is loaded

// Messe-Daten speichern
const map = [
  { spanId: "messeName", inputId: "nameHidden", label: "Messename" },
  { spanId: "messeOrt", inputId: "ortHidden", label: "Ort" },
  { spanId: "messeStart", inputId: "startHidden", label: "Messe-Start" },
  { spanId: "messeEnde", inputId: "endeHidden", label: "Messe-Ende" },
];

map.forEach(({ spanId, inputId, label }) => {
  const span = document.getElementById(spanId);
  const hiddenInput = document.getElementById(inputId);

  if (span && hiddenInput) {
    const updateHidden = () => {
      hiddenInput.value = span.textContent.trim();
      //DEBUG
      // console.log(`${label} gespeichert:`, hiddenInput.value);
      console.log(
        "Status gespeichert für:",
        hiddenInput.checkStatusPflanzen,
        "Wert:",
        hiddenInput.value
      );
    };
    if (span.textContent.trim()) updateHidden();
    const observer = new MutationObserver(updateHidden);
    observer.observe(span, {
      childList: true,
      characterData: true,
      subtree: true,
    });
  }
});

//Textarea expand

document.querySelectorAll(".toggleButton").forEach((button) => {
  button.addEventListener("click", function () {
    const parent = button.closest(".container"); // Finde den übergeordneten Container
    const toggleElement = parent.querySelector(".anmerkung"); // Innerhalb des Containers
    toggleElement.classList.toggle("expanded");
    button.classList.toggle("rotate");
    console.log("Button geklickt!");
  });
});

//////////////////
// JA/NEIN-Buttons
//////////////////

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".checkmark img").forEach(function (img) {
    img.addEventListener("click", function () {
      let hiddenInput = this.closest(".box-container").querySelector(
        "input[type='hidden']"
      );
      if (!hiddenInput) return;

      if (this.classList.contains("yes")) {
        hiddenInput.value = "yes";
        this.src = "./img/checkBtnOK_green.svg";
        this.nextElementSibling.src = "./img/checkBtnX.svg";
      } else if (this.classList.contains("no")) {
        hiddenInput.value = "no";
        this.src = "./img/checkBtnX_red.svg";
        this.previousElementSibling.src = "./img/checkBtnOK.svg";
      }
    });
  });
});

//////////////////
///// TEXTAREA speichern///
//////////////////

document.addEventListener("DOMContentLoaded", function () {
  // Alle Textareas mit Anmerkungen auswählen
  document
    .querySelectorAll("textarea[name$='Anmerkung']")
    .forEach((textarea) => {
      textarea.addEventListener("input", function () {
        // Das zugehörige versteckte Eingabefeld suchen
        let hiddenInput = this.closest("div").querySelector(
          "input[type='hidden']"
        );
        if (hiddenInput) {
          hiddenInput.value = this.value;
          console.log(hiddenInput.value);
        }
      });
    });
});

//////////////////
///// Jobnummer speichern ///
//////////////////

document.addEventListener("DOMContentLoaded", function () {
  const jobInput = document.getElementById("jobNumberInput");
  const hiddenInput = document.getElementById("jobNumberHidden");

  if (jobInput && hiddenInput) {
    jobInput.addEventListener("input", function () {
      hiddenInput.value = jobInput.value;
      //DEBUG
      // console.log("Jobnummer gesetzt:", hiddenInput.value);
    });
  }
});

//////////////////
///// Kunde speichern ///
//////////////////

/////////////////
// UNTERSCHRIFT
//////////////////
function initializeSignaturePad(canvasId, clearButtonId, saveButtonId, filename) {
  const canvas = document.getElementById(canvasId);
  const ctx = canvas.getContext("2d");
  const clearButton = document.getElementById(clearButtonId);
  const saveButton = document.getElementById(saveButtonId);

  let isDrawing = false;
  let lastWidth = 0;

  // Dynamische Canvas-Größe (nur initial oder bei echter Größenänderung)
  function resizeCanvas() {
    const rect = canvas.getBoundingClientRect();
    const newWidth = rect.width;

    if (newWidth !== lastWidth) {
      const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height); // optional: sichern

      canvas.width = rect.width * window.devicePixelRatio;
      canvas.height = rect.height * window.devicePixelRatio;
      ctx.scale(window.devicePixelRatio, window.devicePixelRatio);

      lastWidth = newWidth;
      // ctx.putImageData(imageData, 0, 0); // optional: Signatur wiederherstellen
    }
  }

  resizeCanvas();
  window.addEventListener("resize", resizeCanvas);

  // Hilfsfunktionen für Koordinaten
  function getX(event) {
    if (event.touches) {
      return event.touches[0].clientX - canvas.getBoundingClientRect().left;
    }
    return event.offsetX;
  }

  function getY(event) {
    if (event.touches) {
      return event.touches[0].clientY - canvas.getBoundingClientRect().top;
    }
    return event.offsetY;
  }

  // Zeichnen starten
  function startDrawing(event) {
    event.preventDefault();
    isDrawing = true;
    ctx.beginPath();
    ctx.moveTo(getX(event), getY(event));
  }

  // Zeichnen fortsetzen
  function draw(event) {
    if (!isDrawing) return;
    event.preventDefault();
    ctx.lineTo(getX(event), getY(event));
    ctx.strokeStyle = "black";
    ctx.lineWidth = 2;
    ctx.stroke();
  }

  // Zeichnen beenden
  function stopDrawing(event) {
    if (!isDrawing) return;
    event.preventDefault();
    isDrawing = false;
    ctx.closePath();
  }

  // Events – Maus
  canvas.addEventListener("mousedown", startDrawing);
  canvas.addEventListener("mousemove", draw);
  canvas.addEventListener("mouseup", stopDrawing);
  canvas.addEventListener("mouseout", stopDrawing);

  // Events – Touch
  canvas.addEventListener("touchstart", startDrawing, { passive: false });
  canvas.addEventListener("touchmove", draw, { passive: false });
  canvas.addEventListener("touchend", stopDrawing);
  canvas.addEventListener("touchcancel", stopDrawing);

  // Clear Button
  clearButton.addEventListener("click", (event) => {
    event.preventDefault();
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  });

  // Save Button (optional)
  /*
  saveButton.addEventListener("click", () => {
    const dataURL = canvas.toDataURL("image/png");
    const link = document.createElement("a");
    link.href = dataURL;
    link.download = `${filename}.png`;
    link.click();
  });
  */
}

// Initialize beim Laden
document.addEventListener("DOMContentLoaded", function () {
  initializeSignaturePad("signature-pad-1", "clear-1", "save-1", "unterschrift-benutzer");
  initializeSignaturePad("signature-pad-2", "clear-2", "save-2", "unterschrift-kunde");
});

// Speichern in verstecktem Feld bei PDF-Export
document.getElementById("downloadPdfButton").addEventListener("click", function () {
  var canvas1 = document.getElementById("signature-pad-1");
  var dataURL1 = canvas1.toDataURL("image/png");
  document.getElementById("signatureAgent").value = dataURL1;

  var canvas2 = document.getElementById("signature-pad-2");
  var dataURL2 = canvas2.toDataURL("image/png");
  document.getElementById("signatureCustomer").value = dataURL2;
});


////////////////////////////
// Unterschriften speichern/
////////////////////////////

document
  .getElementById("downloadPdfButton")
  .addEventListener("click", function (e) {
    // Vor dem Abschicken des Formulars Canvas auslesen:
    var canvas1 = document.getElementById("signature-pad-1");
    var dataURL1 = canvas1.toDataURL("image/png");
    document.getElementById("signatureAgent").value = dataURL1;

    var canvas2 = document.getElementById("signature-pad-2");
    var dataURL2 = canvas2.toDataURL("image/png");
    document.getElementById("signatureCustomer").value = dataURL2;

    
  });

//////////////////
// Firma speichern
//////////////////

document.addEventListener("DOMContentLoaded", function () {
  const firmaText = document.querySelector("#firma span");
  const firmaHidden = document.getElementById("firmaHidden");

  if (firmaText && firmaHidden) {
    const observer = new MutationObserver(function () {
      firmaHidden.value = firmaText.textContent;
      //DEBUG
      // console.log("Firma gespeichert:", firmaHidden.value);
    });

    observer.observe(firmaText, { childList: true });
  }
});

//////////////////
// Halle, Stand, Größe speichern
//////////////////

document.addEventListener("DOMContentLoaded", function () {
  const halleSpan = document.getElementById("halle");
  const halleHidden = document.getElementById("halleHidden");
  if (halleSpan && halleHidden) {
    const observer = new MutationObserver(() => {
      halleHidden.value = halleSpan.textContent;
      //DEBUG
      //console.log("Halle gespeichert:", halleHidden.value);
    });
    observer.observe(halleSpan, { childList: true });
  }

  const standSpan = document.getElementById("stand");
  const standHidden = document.getElementById("standHidden");
  if (standSpan && standHidden) {
    const observer = new MutationObserver(() => {
      standHidden.value = standSpan.textContent;
      //DEBUG
      // console.log("Stand gespeichert:", standHidden.value);
    });
    observer.observe(standSpan, { childList: true });
  }

  const groesseSpan = document.getElementById("groesse");
  const groesseHidden = document.getElementById("groesseHidden");
  if (groesseSpan && groesseHidden) {
    const observer = new MutationObserver(() => {
      groesseHidden.value = groesseSpan.textContent;
      //DEBUG
      // console.log("Größe gespeichert:", groesseHidden.value);
    });
    observer.observe(groesseSpan, { childList: true });
  }

  const typSpan = document.getElementById("typ");
  const typHidden = document.getElementById("typHidden");
  if (typSpan && typHidden) {
    const observer = new MutationObserver(() => {
      typHidden.value = typSpan.textContent;
      //DEBUG
      // console.log("Typ gespeichert:", typHidden.value);
    });
    observer.observe(typSpan, { childList: true });
  }

  // const typSelect = document.getElementById("typ");
  // const typHidden = document.getElementById("typHidden");
  // if (typSelect && typHidden) {
  //   typSelect.addEventListener("change", function () {
  //     typHidden.value = typSelect.value;
  //     console.log("Typ gespeichert:", typHidden.value);
  //   });
  // }
});

//////////////////
// Daten abrufen
//////////////////

let globalFirma = ""; // Globale Variable für den Firmennamen

document.addEventListener("DOMContentLoaded", () => {
  const fetchDataButton = document.getElementById("fetchDataButton");
  const jobNumberInput = document.getElementById("jobNumberInput");

  fetchDataButton.addEventListener("click", (event) => {
    event.preventDefault(); // Verhindert ein versehentliches Absenden des Formulars
    //DEBUG
    //console.log("Datenabruf gestartet, PDF sollte NICHT erstellt werden!");

    const jobNumber = jobNumberInput.value;
    if (!jobNumber) {
      alert("Bitte geben Sie eine Jobnummer ein.");
      return;
    }

    // Hauptdaten abrufen
    fetch(`data.php?jobnummer=${jobNumber}`)
      .then((response) => response.json())
      .then((data) => {
        if (data.error) {
          console.error("Fehler von PHP:", data.error);
          console.log(">>> Messe-RowId:", data.messe);
        } else {
          globalFirma = data.firma || "Keine Daten";

          document.querySelector("#firma span").textContent = globalFirma;
          updateOtherFields();

          document.querySelector("#groesse").textContent =
            data.größe || "Keine Daten";
          document.querySelector("#halle").textContent =
            data.halle || "Keine Daten";
          document.querySelector("#stand").textContent =
            data.stand || "Keine Daten";
          document.querySelector("#typ").textContent =
            data.typ || "Keine Daten";
          //DEBUG
          // console.log("Hier beginnt debug");
          // console.log(">>> Datenobjekt:", data);
          // console.log(">>> Messe-RowId:", data.messe);

          // const rowId = "MXWHtSbNSkeuAFcqa3QB7A";
          const rowId = data.messe;
          if (rowId) {
            const hiddenInput = document.getElementById("messeRowIdHidden");
            if (hiddenInput) hiddenInput.value = rowId;

            fetch(`dataMesse.php?row_id=${rowId}`)
              .then((response) => response.json())
              .then((messeData) => {
                //DEBUG
                // console.log("MESSERESPONSE (MESSE):", messeData);

                if (messeData.error) {
                  //DEBUG
                  // console.error("Fehler von dataMesse.php:", messeData.error);
                } else {
                  document.querySelector("#messeName").textContent =
                    messeData.messe || "Keine Angabe";
                  document.querySelector("#messeOrt").textContent =
                    messeData.ort || "Keine Angabe";
                  document.querySelector("#messeStart").textContent =
                    messeData.messeStart || "Keine Angabe";
                  document.querySelector("#messeEnde").textContent =
                    messeData.messeEnde || "Keine Angabe";

                  // Show the #infos element only after all data has been loaded
                  const infos = document.getElementById("infos");
                  if (infos) {
                    infos.style.display = "block"; // macht das Element sichtbar

                    // kleine Verzögerung für smooth transition
                    setTimeout(() => {
                      infos.classList.add("show");
                    }, 10);
                  }
                }
              })
              .catch((err) => {
                console.error("Fehler beim Abrufen der Messedaten:", err);
              });
          }
        }
      })
      .catch((err) => {
        console.error("Fehler beim Abrufen der Daten:", err);
      });
  });
}); // ← DOMContentLoaded-Ende

function updateOtherFields() {
  const otherElement = document.querySelector("#someOtherElement");
  if (otherElement) {
    otherElement.textContent = globalFirma;
  }
}



document.addEventListener("DOMContentLoaded", function () {
  const pdfSpeichernButton = document.getElementById("downloadPdfButton");

  pdfSpeichernButton.addEventListener("click", function () {
    //DEBUG
    // console.log("PDF wird jetzt erstellt...");
    document.getElementById("pdfForm").submit();
  });
});
