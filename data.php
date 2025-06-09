<?php
header('Content-Type: application/json');

// === SIMULIERTE API ANFRAGE ===
// Hier würden normalerweise Token geholt und eine SQL-Abfrage gemacht.

// Stattdessen simulieren wir ein erfolgreiches Ergebnis basierend auf der Jobnummer:
$jobnummer = $_GET['jobnummer'] ?? '';

if (empty($jobnummer)) {
    echo json_encode(['error' => 'Jobnummer fehlt']);
    exit;
}

// === SIMULIERTE DATEN ===
// Hier könntest du z.B. unterschiedliche Antworten auf verschiedene Jobnummern liefern
$simulierteDaten = [
    'firma' => 'Beispiel GmbH',
    'größe' => '36 m²',
    'stand' => 'A12',
    'halle' => '4',
    'typ'   => 'Reihenstand, Kopfstand',
    'messe' => 'Fachmesse 2025'
];

// === AUSGABE ===
echo json_encode($simulierteDaten);
