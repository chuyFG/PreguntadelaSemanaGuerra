<?php
$csvData = $_POST['csvData'];

if (!empty($csvData)) {
    $file = 'respuestas.csv';
    // Append to the file
    if (file_put_contents($file, $csvData, FILE_APPEND | LOCK_EX) !== false) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
