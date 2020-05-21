<?php
$bot_id = $_POST['bot_id'];
$user_id = $_POST['user_id'];
$module_id = $_POST['module_id'];
$channel = $_POST['channel'];
$file = "https://api.covid19api.com/summary";
$data = file_get_contents($file);
$result = json_decode($data, true);
$new=(string)$result["Global"]["NewConfirmed"];
$total=(string)$result["Global"]["TotalConfirmed"];
$message = "New cases confirmed are ".$new."\ntotal number of cases are ".$total.$channel.$module_id;
$suggestedReplies = ["Indias data","canada's data"];
header ('Content-Type: application/json');
$response = [
    'user_id' => $user_id,
    'bot_id' => $bot_id,
    'module_id' => $module_id,
    'message' => $message,
    'suggested_replies' => $suggestedReplies,
    'blocked_input' => false
];
echo json_encode($response);
die();
?>
