<?php 
    $dataGetFromAPI = file_get_contents('https://jobs.github.com/positions.json');
    $dataTypeJSON = json_decode($dataGetFromAPI, true);
?>