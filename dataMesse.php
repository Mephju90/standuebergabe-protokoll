<?php

header('Content-Type: application/json');

// Debugging deaktivieren
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// === SIMULIERTE ABFRAGE NACH row_id ===
$messeRowId = $_GET['row_id'] ?? '';
if (empty($messeRowId)) {
    echo json_encode(['error' => 'row_id fehlt']);
    exit;
}

// === SIMULIERTE DATEN FÜR DEMO-ZWECKE ===
$simulierteMesse = [
    'messe'       => 'Internationale Fachmesse 2025',
    'ort'         => 'München',
    'messeStart'  => '10.04.2025',
    'messeEnde'   => '14.04.2025',
];

// === AUSGABE ===
echo json_encode($simulierteMesse);
exit;
