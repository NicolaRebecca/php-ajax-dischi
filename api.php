<?php

require_once __DIR__ . "databaseDischi.php";

header('Content-Type: application/json');

echo json_encode($albums);