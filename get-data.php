<?php
$file = "https://api.covid19api.com/summary";
$data = file_get_contents($file);
$result = json_decode($data, true);
print_r($result["Global"]["NewConfirmed"]);
?>
