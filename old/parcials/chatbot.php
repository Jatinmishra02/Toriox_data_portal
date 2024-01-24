<?php
session_start();

// Initialize $chat as an empty array
$chat = array();

// Check if the user is starting a new conversation or continuing an existing one
if (empty($_SESSION['chat'])) {
    $_SESSION['chat'] = array();
} else {
    $chat = $_SESSION['chat'];
}

// Handle user input and responses
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['user_input'];
    $chat[] = "You: $userInput";

    // Define responses based on user input
    switch (strtolower($userInput)) {
        case 'hello':
            $chat[] = "Bot: Hello! How can I assist you today?";
            break;
        case 'help':
            $chat[] = "Bot: Sure! What do you need help with?";
            break;
        case 'bye':
            $chat[] = "Bot: Goodbye! Have a great day!";
            break;
        default:
            $chat[] = "Bot: I'm not sure how to respond to that. Please ask another question or type 'help' for assistance.";
            break;
    }
}

// Display the chat
$chatHtml = implode("<br>", $chat);
?>

<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .chat-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        .message {
            background-color: #f0f0f0;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }

        .user-message {
            background-color: #3498db;
            color: #fff;
        }

        .bot-message {
            background-color: #e1e1e1;
        }

        .input-container {
            margin-top: 20px;
            display: flex;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Chatbot</h1>
    <div class="chat-container">
        <div id="chatbox">
            <?php echo $chatHtml; ?>
        </div>
        <form method="post" id="chat-form" class="input-container">
            <input type="text" name="user_input" id="user-input" placeholder="Type your message here">
            <button type="submit">Send</button>
        </form>
    </div>
    <script>
        document.getElementById("chat-form").addEventListener("submit", function(e) {
            e.preventDefault();
            let userInput = document.getElementById("user-input").value;
            document.getElementById("chatbox").innerHTML += "<div class='message user-message'>You: " + userInput + "</div";
            document.getElementById("user-input").value = '';
            
            // Simulate a bot response (you can replace this with your actual chatbot logic)
            setTimeout(function() {
                document.getElementById("chatbox").innerHTML += "<div class='message bot-message'>Bot: Hello! How can I assist you today?</div>";
            }, 1000);
        });
    </script>
</body>
</html>


