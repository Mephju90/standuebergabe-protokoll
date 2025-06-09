# 🛠️ Standübergabe-Protokoll (Portfolio-Version)

Diese Anwendung ist eine digitalisierte Version des früher papierbasierten Standübergabe-Protokolls der Werbeagentur Regelmann GmbH & Co. KG.  
Sie dient ausschließlich als Portfolio-Projekt und stellt keine offizielle oder produktive Anwendung der Regelmann GmbH dar.

---

## 🔍 Projektübersicht

Im Original wurde die Anwendung mit einer SeaTable-Datenbank angebunden.  
Durch die Eingabe der Jobnummer wurde eine Abfrage an die Datenbank geschickt, um die Kundendaten und Messestanddetails abzurufen.  
Das Protokoll konnte per Unterschrift bestätigt werden und das fertige PDF wurde lokal gespeichert und per E-Mail an das Messeteam versandt.

In dieser GitHub-Version wurde aus Gründen der Portabilität und Datenschutz die Datenbank-Anbindung sowie die Funktionen für E-Mail-Versand und lokales Speichern entfernt.  
Das PDF wird in dieser Version nur generiert und direkt im Browser angezeigt. -Nutze die Jobnummer: 1234

---


## 🔧 Verwendete Technologien

- PHP
- HTML5 & CSS3
- JavaScript
- SeaTable API (im Original)
- Webhosting bei Ionos 

---

## 📁 Projektstruktur
/
├── index.php
├── generate_pdf.php
├── data.php
├── dataMesse.php
├── style.css
├── script.js
├── /vendor
├── /img
└── /font

---

## 🚀 Live-Demo

🔗 [Hier geht's zur Portfolio-Demo](https://messeprotokoll-demo-mephju90.de/)

(Nur zur Ansicht, keine produktive Anwendung)

---

## ⚠️ Rechtliche Hinweise

Diese Website ist eine private Portfolio-Demoversion und keine offizielle Anwendung der Werbeagentur Regelmann GmbH & Co. KG.  
Alle Rechte an Marken, Logos und Inhalten liegen bei der Werbeagentur Regelmann GmbH & Co. KG.  
Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte wird keine Haftung übernommen, soweit rechtlich zulässig.

---

## ✍️ Autor

Erstellt von Steven [Mephju90](https://github.com/Mephju90) – leidenschaftlicher Junior Web Developer.
