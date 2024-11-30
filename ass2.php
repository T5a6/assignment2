<?php
$url = 'https://data.gov.bh/explore/dataset/01-statistics-of-students-nationalities_updated/table/?disjunctive.year&disjunctive.semester&disjunctive.the_programs&sort=number_of_students';
//url of the data set
$result = file_get_contents($url);
//retrieve the content of the url
$response = json_decode($result, true);
//converts the json to php

if ($response === false) {  // check if the data was fetched successfully
    echo "Cannot fetch the data from the specified URL"; // when fetch fails, error message appears
    exit; // stop execution 
}

$data = $response['records'];
//extract the data 'records' from the data set to be dealed with element by element
foreach ($data as $row) { //loop that will extract each row and save it in the spacified array that will be executed
    $year[] = $row['year'];
    $semester[] = $row['semester'];
    $programs[] = $row['the_programs'];
    $nationality[] = $row['nationality'];
    $colleges[] = $row['colleges'];
    $number_of_students[] = $row['number_of_students'];
}
?>
