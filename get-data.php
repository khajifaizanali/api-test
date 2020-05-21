<?php
$file = "http://d.yimg.com/autoc.finance.yahoo.com/autoc?query=yahoo&callback=YAHOO.Finance.SymbolSuggest.ssCallback";
$data = file_get_contents($file);
$data = mb_substr($data, strpos($data, '{'));
$data = mb_substr($data, 0, -1);
$result = json_decode($data, true);
print_r($result['Global]);
?>
