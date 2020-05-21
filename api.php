<?php
$bot_id = $_POST['bot_id'];
$user_id = $_POST['user_id'];
$module_id = $_POST['module_id'];
$channel = $_POST['channel'];
$message = 'I can tell you what the weather is like today!';
$suggestedReplies = ["Today's weather",'Next 5 days','Pick a day', 'Return to the beginning'];
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
