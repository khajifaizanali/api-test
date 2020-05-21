<?php
$file = "https://api.covid19api.com/summary";
$data = file_get_contents($file);
$data = mb_substr($data, strpos($data, '{'));
$data = mb_substr($data, 0, -1);
$result = json_decode($data, true);
print_r($result['Global']);
?>
