<?php
$bot_id = $_POST['bot_id'];
$user_id = $_POST['user_id'];
$module_id = $_POST['module_id'];
$channel = $_POST['channel'];
$incoming=$_POST['incoming_message'];
$file = "https://api.covid19api.com/summary";
$data = file_get_contents($file);
$result = json_decode($data, true);
$obj=$result["Countries"];
foreach($obj as $key => $value) {
    if(strcmp(strtolower($incoming),$value["Slug"])==0){
    $message=$incoming." New cases ".(string)$value["NewConfirmed"]."\nTotal confirmed cases".(string)$value["TotalConfirmed"];
        break;
    }    
}
$new=(string)$result["Global"]["NewConfirmed"];
$total=(string)$result["Global"]["TotalConfirmed"];
$message = $message."\nGlobal Report:\nNew cases confirmed are ".$new."\ntotal number of cases are ".$total;
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
