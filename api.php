// Data sent via POST method is saved to the appropriate variables
$bot_id = $_POST['bot_id'];
$user_id = $_POST['user_id'];
$module_id = $_POST['module_id'];
$channel = $_POST['channel'];

// Add a message that will be displayed in the chat
$message = 'I can tell you what the weather is like today!';

// Add quick replies to the chat
$suggestedReplies = ["Today's weather",'Next 5 days','Pick a day', 'Return to the beginning'];

// Add answer’s header
header ('Content-Type: application/json');

// Build an array $response
$response = [
    'user_id' => $user_id,
    'bot_id' => $bot_id,
    'module_id' => $module_id,
    'message' => $message,
    'suggested_replies' => $suggestedReplies,
    'blocked_input' => false
];

// Convert an array to JSON string and send as a server response to the Snatchbot server
echo json_encode($response);

// End program
die();