<?php
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

$response = file_get_contents($URL);
if ($response == false) {
    echo "Cannot fetch the data from the spacified URL";
    exit;}

$result = json_decode($response, true);

if (isset($result['records']) && !empty($result)) {

    echo "<!DOCTYPE html> <html> <head>";
    echo "<meta charset='utf-8'> <meta name='viewport' content='width=device-width, initial-scale=1.0'>"; 
    echo "<title>University of Bahrain Students Enrollment by Nationality</title>"; 
    echo "</head>"; }