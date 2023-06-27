<?php
    require '../config/config.php';
    $sql = "SELECT * FROM tickets";

// Execute the query
$result = $conn->query($sql);

// Create an array to store the retrieved data
$data = array();

// Fetch each row from the result set
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the database connection
$conn->close();

// Create a file handle
$filename = 'Blank-CSV-Template.csv';
$file = fopen($filename, 'w');

// Write data to the file
foreach ($data as $row) {
    fputcsv($file, $row);
}

// Close the file handle
fclose($file);

// Set headers for file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Output the file contents
readfile($filename);
?>