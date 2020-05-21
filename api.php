<?php
$bot_id = $_POST['bot_id'];
$user_id = $_POST['user_id'];
$module_id = $_POST['module_id'];
$channel = $_POST['channel'];
$incoming=$_POST['incoming_message'];
$incoming='India';
$file = "https://api.covid19api.com/summary";
$data = file_get_contents($file);
$result = json_decode($data, true);
$obj=$result["Countries"];
foreach($obj as $key => $value) {
    $message=$incoming;
    if(!strcmp(strtolower($incoming),$value["Slug"])){
    $message=$message."New cases ".(string)$value["NewConfirmed"]."\n Total confirmed cases".(string)$value["TotalConfirmed"];
    }    
}
$new=(string)$result["Global"]["NewConfirmed"];
$total=(string)$result["Global"]["TotalConfirmed"];
$message = $messages."\nGlobal Report:\nNew cases confirmed are ".$new."\ntotal number of cases are ".$total.$channel.$module_id.$incoming;
$suggestedReplies = ["India","canada","Indonesia"];
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
