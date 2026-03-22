<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Standübergabe-Protokoll</title>

  <script src="script.js" defer type="module"></script>

  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />

  <link
    rel="apple-touch-icon"
    sizes="57x57"
    href="img/fav/apple-icon-57x57.png" />
  <link
    rel="apple-touch-icon"
    sizes="60x60"
    href="img/fav/apple-icon-60x60.png" />
  <link
    rel="apple-touch-icon"
    sizes="72x72"
    href="img/fav/apple-icon-72x72.png" />
  <link
    rel="apple-touch-icon"
    sizes="76x76"
    href="img/fav/apple-icon-76x76.png" />
  <link
    rel="apple-touch-icon"
    sizes="114x114"
    href="img/fav/apple-icon-114x114.png" />
  <link
    rel="apple-touch-icon"
    sizes="120x120"
    href="img/fav/apple-icon-120x120.png" />
  <link
    rel="apple-touch-icon"
    sizes="144x144"
    href="img/fav/apple-icon-144x144.png" />
  <link
    rel="apple-touch-icon"
    sizes="152x152"
    href="img/fav/apple-icon-152x152.png" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="img/fav/apple-icon-180x180.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="192x192"
    href="img/fav/android-icon-192x192.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="img/fav/favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="96x96"
    href="img/fav/favicon-96x96.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="img/fav/favicon-16x16.png" />
  <link rel="manifest" href="img/fav/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta
    name="msapplication-TileImage"
    content="img/fav/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
</head>

<body>
  <div id="content">
    <form id="pdfForm" action="generate_pdf.php" method="post">
      <header>
        <div class="container">
          <div class="row text-center">
            <div class="col logo">
             
              
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="container">
            <div class="row">
              <div class="col" style="font-weight: bold;">
                <h1>Standübergabe-Protokoll</h1>
              </div>
            </div>

            <div class="row datum">
              <div class="col">
                <h6></h6>
                <input type="hidden" name="datum" id="datumHidden" />
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid dark-gray">
          <div class="container">
            <div class="row p-2">
              <div class="col d-flex justify-content-evenly align-items-center">
                <label for="jobNumberInput"></label>
                <input
                  class="text-center radius"
                  type="text"
                  id="jobNumberInput"
                  placeholder="1234 eingeben"
                  style="width: 130px; margin-right: 6px;" 
                  oninput="this.value = this.value.toUpperCase()"
                  />
                <input type="hidden" name="jobNumber" id="jobNumberHidden" value="">

                <button id="fetchDataButton" class="btn btn-secondary" style="width: 130px;">
                  Daten abrufen
                </button>
              </div>
            </div>
          </div>
        </div>

<div id="infos">

        <div class="container">
          <div class="row">
            <div class="col kundendaten">
              <p id="firma">Kunde: <span></span></p>
              <input type="hidden" name="firma" id="firmaHidden" />
            </div>
          </div>
        </div>

        <div class="container-fluid dark-gray">
          <div>
            <div class="row p-2 w-100">
              <div class="col-12 text-center">
                <h3 id="messe" style="font-weight: 300;">Messe:
                  <span id="messeName" style="font-weight: bold; word-break: break-word;"></span>
                  <input type="hidden" name="messeName" id="nameHidden" />
                  <span style="font-weight: 300;">Ort: </span>
                  <span id="messeOrt" style="font-weight: bold; word-break: break-word;"></span><br>
                  <input type="hidden" name="messeOrt" id="ortHidden" />
                  <span style="font-weight: 300;"> </span>
                  <span id="messeStart" style="font-weight: bold; word-break: break-word;"></span>
                  <input type="hidden" name="messeStart" id="startHidden" />
                  <span style="font-weight: 300;">bis: </span>
                  <span id="messeEnde" style="font-weight: bold; word-break: break-word;"></span>
                  <input type="hidden" name="messeEnde" id="endeHidden" />
                </h3>
                <input type="hidden" name="messeRowId" id="messeRowIdHidden" />
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row d-flex mt-5">
            <div class="col text-start table-left mt-3">
              <p>Halle: <span id="halle"></span></p>
              <input type="hidden" name="halle" id="halleHidden" />
              <p class="mt-3">Stand: <span id="stand"></span></p><input type="hidden" name="stand" id="standHidden" />
            </div>
            <div class="col text-start table-right mt-3">
              <div class="">
                <p>Größe: <span id="groesse"></span> m²</p>
                <input type="hidden" name="groesse" id="groesseHidden" />
                <p class="mt-3">Typ: <span id="typ"></span></p>
                <input type="hidden" name="typ" id="typHidden" />
              </div>
            </div>
          </div>
        </div>
      </header>

</div>

      <div class="container-fluid red checkliste-con">
        <div class="container">
          <div class="row">
            <div class="col checkliste">
              <h2>Checkliste</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-start">
            <h3>Stand</h3>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container boden">
        <div class="row dark-gray boxGray">
          <div class="col">
            <svg
              width="55"
              height="40"
              viewBox="0 0 55 40"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g>
                <path
                  d="M50.4296 30.5547L44.3096 11.4147C44.2613 11.2663 44.1356 11.1332 43.9536 11.0377C43.7716 10.9421 43.5443 10.89 43.31 10.89H11.69C11.2055 10.89 10.7873 11.1111 10.6904 11.4147L4.5704 30.5547C4.5092 30.7494 4.5857 30.9507 4.7795 31.1058C4.9733 31.2609 5.264 31.35 5.57 31.35H49.43C49.736 31.35 50.0267 31.2609 50.2205 31.1058C50.4143 30.954 50.4908 30.7494 50.4296 30.5547ZM45.1154 20.46H28.52V12.21H42.4787L45.1154 20.46ZM12.5213 12.21H26.48V20.46H9.8846L12.5213 12.21ZM9.4817 21.7173C9.6092 21.7569 9.752 21.78 9.905 21.78H26.48V30.03H6.8246L9.4817 21.7173ZM28.52 30.03V21.78H45.095C45.248 21.78 45.3908 21.7569 45.5183 21.7173L48.1754 30.03H28.52ZM31.07 5.27999C32.4776 5.27999 33.62 6.01919 33.62 6.92999C33.62 7.29299 34.079 7.58999 34.64 7.58999C35.201 7.58999 35.66 7.29299 35.66 6.92999C35.66 6.01919 36.8024 5.27999 38.21 5.27999C38.771 5.27999 39.23 4.98299 39.23 4.61999C39.23 4.25699 38.771 3.95999 38.21 3.95999C36.8024 3.95999 35.66 3.22079 35.66 2.30999C35.66 1.94699 35.201 1.64999 34.64 1.64999C34.079 1.64999 33.62 1.94699 33.62 2.30999C33.62 3.22079 32.4776 3.95999 31.07 3.95999C30.509 3.95999 30.05 4.25699 30.05 4.61999C30.05 4.98299 30.509 5.27999 31.07 5.27999ZM34.64 4.17119C34.844 4.33619 35.0786 4.48469 35.3336 4.61999C35.0786 4.75199 34.8491 4.90379 34.64 5.06879C34.436 4.90379 34.2014 4.75529 33.9464 4.61999C34.2014 4.48799 34.436 4.33619 34.64 4.17119ZM16.79 6.59999C18.1976 6.59999 19.34 7.33919 19.34 8.24999C19.34 8.61299 19.799 8.90999 20.36 8.90999C20.921 8.90999 21.38 8.61299 21.38 8.24999C21.38 7.33919 22.5224 6.59999 23.93 6.59999C24.491 6.59999 24.95 6.30299 24.95 5.93999C24.95 5.57699 24.491 5.27999 23.93 5.27999C22.5224 5.27999 21.38 4.54079 21.38 3.62999C21.38 3.26699 20.921 2.96999 20.36 2.96999C19.799 2.96999 19.34 3.26699 19.34 3.62999C19.34 4.54079 18.1976 5.27999 16.79 5.27999C16.229 5.27999 15.77 5.57699 15.77 5.93999C15.77 6.30299 16.229 6.59999 16.79 6.59999ZM20.36 5.49119C20.564 5.65619 20.7986 5.80469 21.0536 5.93999C20.7986 6.07199 20.5691 6.22379 20.36 6.38879C20.156 6.22379 19.9214 6.07529 19.6664 5.93999C19.9214 5.80799 20.156 5.65619 20.36 5.49119Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_439"
                  x="-2"
                  y="0"
                  width="59"
                  height="41"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_439" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_439"
                    result="shape" />
                </filter>
              </defs>
            </svg>
          </div>

          <div class="col-5 text-white">
            <p>Boden</p>
          </div>

          <div class="col checkmark">
            <img
              src="./img/checkBtnOK_web.svg"
              alt="Yes"
              style="margin-right: 0px"
              width="40px"
              class="yes" />
            <img
              src="./img/checkBtnX_web.svg"
              alt="No"
              width="40px"
              class="no" />
          </div>
          <!-- Verstecktes Feld zur Speicherung des Button-Status -->
          <input
            type="hidden"
            name="checkStatusBoden"
            id="checkStatusBoden"
            value="" />
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="bodenAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text1"
                id="text1"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container wände seitenumbruch-nachher">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/wand.png" alt="" width="50" />
          </div>

          <div class="col-5 text-white">
            <p>Wände</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusWände"
              id="checkStatusWände"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea name="wändeAnmerkung" id="note" class="form-control" rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text2"
                id="text2"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="container pdf-logo">
        <div class="row text-center">
          <div class="col">
            <svg version="1.1" id="Ebene_1" width="200" height="33.3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 245 51" enable-background="new 0 0 245 51" xml:space="preserve">
         <g>
           <g>
             <path fill="#DC002F" d="M220,3c0-1.7,1.3-3,2.9-3c1.6,0,2.9,1.4,2.9,3v20.7c0,1.7-1.3,3-2.9,3c-1.6,0-2.9-1.4-2.9-3V3z"/>
           </g>
           <g>
             <path fill="#DC002F" d="M229.6,3c0-1.7,1.3-3,2.9-3c1.6,0,2.9,1.4,2.9,3v20.7c0,1.7-1.3,3-2.9,3c-1.6,0-2.9-1.4-2.9-3V3z"/>
           </g>
           <g>
             <path fill="#DC002F" d="M239.2,3c0-1.7,1.3-3,2.9-3s2.9,1.4,2.9,3v20.7c0,1.7-1.3,3-2.9,3s-2.9-1.4-2.9-3V3z"/>
           </g>
         </g>
         <g>
           <path fill="#74797E" d="M0,13.1h2l0.2,4.7h0.2c1.7-3.1,4.2-5.4,7.2-5.4c1,0,1.7,0.1,2.6,0.5l-0.5,2.1c-0.9-0.3-1.3-0.4-2.3-0.4
             c-2.3,0-5,1.8-7,6.5v17.4H0V13.1z"/>
           <path fill="#74797E" d="M24.5,12.5c6.1,0,9.8,4.3,9.8,11.8c0,0.6,0,1.3-0.1,1.9H15.8c0.1,6.4,3.9,11.1,9.6,11.1
             c2.8,0,4.9-0.9,6.9-2.3l1,1.8c-2,1.2-4.3,2.5-8,2.5c-6.5,0-11.8-5-11.8-13.3S18.8,12.5,24.5,12.5z M32.1,24.4
             c0-6.5-2.9-9.9-7.5-9.9c-4.4,0-8.2,3.8-8.8,9.9H32.1z"/>
           <path fill="#74797E" d="M42.1,37.7v-0.2c-1.3-0.7-2.2-2.1-2.2-4.1c0-2.3,1.6-3.9,2.8-4.7v-0.2c-1.6-1.4-3.2-3.9-3.2-7
             c0-5.3,4-9,9-9c1.4,0,2.6,0.3,3.4,0.6h8.7v2h-6c1.6,1.4,2.8,3.7,2.8,6.4c0,5.2-3.9,9-8.9,9c-1.4,0-3.1-0.4-4.3-1.1
             c-1.1,0.9-2.1,2-2.1,3.7c0,1.9,1.1,3.4,4.9,3.4h5.5c5.7,0,8.4,1.8,8.4,5.9c0,4.4-4.7,8.6-12.1,8.6c-6.4,0-10.5-2.8-10.5-7.1
             C38.3,41.6,39.7,39.4,42.1,37.7z M49,49c5.7,0,9.4-3.2,9.4-6.4c0-2.8-2.1-3.9-5.9-3.9h-5.5c-0.5,0-1.9-0.1-3.2-0.4
             c-2.3,1.6-3.4,3.6-3.4,5.4C40.5,46.8,43.6,49,49,49z M55,21.5c0-4.3-3-7.1-6.6-7.1c-3.6,0-6.6,2.7-6.6,7.1c0,4.3,3.1,7.2,6.6,7.2
             C51.9,28.7,55,25.8,55,21.5z"/>
           <path fill="#74797E" d="M73.7,12.5c6.1,0,9.8,4.3,9.8,11.8c0,0.6,0,1.3-0.1,1.9H65c0.1,6.4,3.9,11.1,9.6,11.1
             c2.8,0,4.9-0.9,6.9-2.3l1,1.8c-2,1.2-4.3,2.5-8,2.5c-6.5,0-11.8-5-11.8-13.3S68,12.5,73.7,12.5z M81.3,24.4c0-6.5-2.9-9.9-7.5-9.9
             c-4.4,0-8.2,3.8-8.8,9.9H81.3z"/>
           <path fill="#74797E" d="M89.6,0.4H92v35.2c0,1.1,0.5,1.6,1.1,1.6c0.2,0,0.4,0,1-0.1l0.4,1.9c-0.5,0.2-1,0.3-1.7,0.3
             c-2.1,0-3.1-1.3-3.1-4V0.4z"/>
           <path fill="#74797E" d="M100.4,13.1h2l0.2,3.9h0.2c2.3-2.6,5.2-4.6,8-4.6c4.1,0,6.2,2.1,7.1,5.2c2.9-3.2,5.7-5.2,8.7-5.2
             c5.1,0,7.7,3.2,7.7,9.8v16.4h-2.4V22.6c0-5.4-1.8-8-5.7-8c-2.4,0-4.8,1.6-7.7,4.8v19.3h-2.3V22.6c0-5.4-1.8-8-5.7-8
             c-2.3,0-4.8,1.6-7.7,4.8v19.3h-2.3V13.1z"/>
           <path fill="#74797E" d="M156.2,22.6c0.1-3.9-1-8.1-6-8.1c-3.5,0-6.4,1.7-8.1,3l-1.1-1.8c1.8-1.3,5.3-3.3,9.5-3.3
             c6.1,0,8.1,4.4,8.1,9.8v16.3h-2l-0.3-3.3h-0.1c-2.6,2.1-5.7,3.9-9,3.9c-4,0-7.4-2.2-7.4-7C139.7,26.6,144.9,23.9,156.2,22.6z
              M147.5,37.3c2.9,0,5.5-1.4,8.7-4.1v-8.7c-10.5,1.2-14,3.7-14,7.7C142.2,35.8,144.6,37.3,147.5,37.3z"/>
           <path fill="#74797E" d="M165.6,13.1h2l0.2,3.9h0.2c2.6-2.6,5.3-4.6,8.8-4.6c5.3,0,7.7,3.2,7.7,9.8v16.4h-2.3V22.6
             c0-5.4-1.7-8-5.9-8c-3,0-5.2,1.6-8.4,4.8v19.3h-2.3V13.1z"/>
           <path fill="#74797E" d="M191.5,13.1h2l0.2,3.9h0.2c2.6-2.6,5.3-4.6,8.8-4.6c5.3,0,7.7,3.2,7.7,9.8v16.4H208V22.6c0-5.4-1.7-8-5.9-8
             c-3,0-5.2,1.6-8.4,4.8v19.3h-2.3V13.1z"/>
         </g>
         </svg>
          </div>
        </div>
      </div> -->

      <div class="container mt-2 box-container decke">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/ceiling.svg" alt="" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Decke</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusDecke"
              id="checkStatusDecke"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="deckenAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text3"
                id="text3"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container licht">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/lightbulb.svg" alt="" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Licht</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusLicht"
              id="checkStatusLicht"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="lichtAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text4"
                id="text4"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container strom">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/electric.svg" alt="" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Strom</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusStrom"
              id="checkStatusStrom"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="stromAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text5"
                id="text5"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-start mt-5">
            <h3>Küche</h3>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container kühlschrank">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/fridge.svg" alt="Kühlschrank icon" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Kühlschrank</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"
                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusKühlschrank"
              id="checkStatusKühlschrank"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="kühlAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text6"
                id="text6"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container geschirrspüler">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/dishwasher.svg" alt="" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Geschirrspüler</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusGeschirr"
              id="checkStatusGeschirr"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="geschirrAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text7"
                id="text7"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container kaffeemaschine">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/coffemaker.svg" alt="" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Kaffeemaschine</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusKaffee"
              id="checkStatusKaffee"
              value="" />
          </div>
          <div class="col arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="kaffeeAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text8"
                id="text8"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container herd seitenumbruch-nachher">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/oven.svg" alt="" class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Herd</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusHerd"
              id="checkStatusHerd"
              value="" />
          </div>
          <div class="col-2 arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="herdAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text9"
                id="text9"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-start mt-5">
            <h3>Multimedia</h3>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container kundeneigentum">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/monitor.svg" alt=" " class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Eigentum</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusKundeneigentum"
              id="checkStatusKundeneigentum"
              value="" />
          </div>
          <div class="col-2 arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="kundeAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text10"
                id="text10"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container miete">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/monitor.svg" alt=" " class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Miete</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusMiete"
              id="checkStatusMiete"
              value="" />
          </div>
          <div class="col-2 arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="mieteAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text11"
                id="text11"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-start mt-5">
            <h3>Sonstiges</h3>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container schlüssel">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/keys.svg" alt=" " class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Schlüssel</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusSchlüssel"
              id="checkStatusSchlüssel"
              value="" />
          </div>
          <div class="col-2 arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="schlüsselAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text12"
                id="text12"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container pflanzen">
        <div class="row dark-gray boxGray">
          <div class="col">
            <img src="./img/plant.svg" alt=" " class="iconFirst" />
          </div>

          <div class="col-5 text-white">
            <p>Pflanzen</p>
          </div>

          <div class="col checkmark">
            <div class="col checkmark">
              <img
                src="./img/checkBtnOK_web.svg"
                alt="Yes"

                width="40px"
                class="yes" />
              <img
                src="./img/checkBtnX_web.svg"
                alt="No"
                width="40px"
                class="no" />
            </div>
            <!-- Verstecktes Feld zur Speicherung des Button-Status -->
            <input
              type="hidden"
              name="checkStatusPflanzen"
              id="checkStatusPflanzen"
              value="" />
          </div>
          <div class="col-2 arrow-down toggleButton">
            <svg
              width="40"
              height="50"
              viewBox="0 0 34 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_23_441)">
                <path
                  d="M25.5001 13.3442C25.4975 13.0603 25.4009 12.78 25.2168 12.5216C25.0237 12.2421 24.7086 12.004 24.3092 11.8357C23.9098 11.6674 23.4429 11.576 22.9643 11.5724L11.0359 11.5724C10.5573 11.576 10.0904 11.6674 9.69098 11.8357C9.29155 12.004 8.97649 12.2421 8.78343 12.5216C8.54539 12.8432 8.4537 13.2009 8.51882 13.5542C8.58394 13.9074 8.80326 14.2418 9.15176 14.5193L15.1159 19.1295C15.3415 19.3103 15.628 19.4563 15.9543 19.5566C16.2805 19.657 16.638 19.7091 17.0001 19.7091C17.3622 19.7091 17.7197 19.657 18.0459 19.5566C18.3722 19.4563 18.6587 19.3103 18.8843 19.1295L24.8484 14.5193C25.2708 14.187 25.5009 13.772 25.5001 13.3442Z"
                  fill="white" />
              </g>
              <defs>
                <filter
                  id="filter0_d_23_441"
                  x="-4"
                  y="0"
                  width="42"
                  height="38"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="4" />
                  <feGaussianBlur stdDeviation="2" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_23_441" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_23_441"
                    result="shape" />
                </filter>
                <clipPath id="clip0_23_441">
                  <rect width="34" height="30" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>

          <div class="row mt-3 anmerkung toggleElement">
            <div class="col-11 mx-auto text-start text-white">
              <label for="note" class="form-label">Anmerkung:</label>
            </div>
            <div class="col-11 mx-auto pb-2">
              <textarea
                name="pflanzenAnmerkung"
                id="note"
                class="form-control"
                rows="4"></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text13"
                id="text13"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-start mt-5">
            <h3>Zusätzlicher Aufwand</h3>
          </div>
        </div>
      </div>

      <div class="container mt-2 box-container zusätzlicher-aufwand">
        <div class="row dark-gray boxGray" style="padding: 15px 0px;">
          <div class="row anmerkung">
            <div class="col-11 mx-auto ">
              <textarea
                name="zusätzlichAnmerkung"
                id="note"
                class="form-control"
                rows="4"
                placeholder="Anmerkung..."></textarea>
              <!-- Verstecktes Feld zur Speicherung des Button-Status -->
              <input
                type="hidden"
                name="text14"
                id="text14"
                value="" />
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row unterschrift">
          <div class="col-12 col-lg-6 pad1">
            <h3>Unterschrift Agentur</h3>
            <canvas id="signature-pad-1"></canvas>
            <input
              type="hidden"
              name="signatureAgent"
              id="signatureAgent"
              value="" />
            <div id="buttons-1" class="text-center">
              <button id="clear-1" class="btn btn-danger">Löschen</button>
            </div>
          </div>

          <div class="col-12 col-lg-6 mt-5 mt-lg-0 pad2">
            <h3>Unterschrift Kunde</h3>
            <canvas id="signature-pad-2"></canvas>
            <input
              type="hidden"
              name="signatureCustomer"
              id="signatureCustomer"
              value="" />
            <div id="buttons-2" class="text-center">
              <button id="clear-2" class="btn btn-danger">Löschen</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container" id="pdfBTN">
        <div class="row pb-5">
          <div class="col">
            <button form="pdfForm" id="downloadPdfButton" class="btn btn-primary mt-3" type="submit">
              PDF generieren
            </button>
          </div>
        </div>
      </div>

      <div class="container" id="footer">
        <div class="row footer text-muted">
          <div class="col">
            <p>Werbeagentur Beispiel GmbH & Co. KG</p>
          </div>
        </div>
      </div>

      <div id="pdf-end-marker" style="height: 1px"></div>
    </form>
  </div>
</body>

</html>
