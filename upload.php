<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['data'])) {
    $file = $_FILES['data'];
    $file_tmp = $file['tmp_name'];
    $file_name = $file['name'];

    if (pathinfo($file_name, PATHINFO_EXTENSION) != 'csv') {
        die('Error: Please upload a CSV file');
    }

    if (move_uploaded_file($file_tmp, 'sheet.csv')) {
        echo 'File uploaded successfully.';
    } else {
        die('Error: Unable to upload file');
    }
}
?>
