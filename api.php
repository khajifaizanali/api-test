<?php
$bot_id = $_POST['bot_id'];
$user_id = $_POST['user_id'];
$module_id = $_POST['module_id'];
$channel = $_POST['channel'];
// $state=$_POST['state'];

// $country=$_POST["Country"];
// $file = "https://api.rootnet.in/covid19-in/stats/latest";
// $data = file_get_contents($file);
// $result = json_decode($data, true);
// $total=(string)$result["data"]["summary"]["total"];
// $ci=(string)$result["data"]["summary"]["confirmedCasesIndian"];
// $cf=(string)$result["data"]["summary"]["confirmedCasesForeign"];
// $dis=(string)$result["data"]["summary"]["discharged"];
// $dea=(string)$result["data"]["summary"]["deaths"];
// $obj=(string)$result["data"]["regional"];
// foreach($obj as $key => $value) {
//     if(strcmp(strtolower($state),strtolower($value["loc"]))==0){
//         $stcon=$value["confirmedCasesIndian"];
//         $stdis=$value["discharged"];
//         $stdeat=$value["deaths"];
//         break;
//     }    
// }
// $message = $country."Report:\ntotal cases confirmed are ".$total."\nTotal Indian Cases confirmed are are ".$ci."\nTotal Foriegn Cases confirmed are ".$cf."\nTotal Number of People Discharged are ".$dis."\nTotal Number of Deaths are ".$dea;
// $message = $message."\n".$state."\nReport:\nTotal Cases Confirmed are ".$stcon."\nTotal cases Discharged are ".$stdis."\nTotal Deaths are ".$stdeat;
$suggestedReplies = ["Menu","Faqs","Hello"];
header ('Content-Type: application/json');
$response = [
    'user_id' => $user_id,
    'bot_id' => $bot_id,
    'module_id' => $module_id,
    'message' => "hello",
    'suggested_replies' => $suggestedReplies,
    'blocked_input' => false
];
echo json_encode($response);
die();
?>
