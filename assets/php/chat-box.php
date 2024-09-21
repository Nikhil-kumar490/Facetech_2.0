<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram-like Chatbox</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/chats.css">
</head>
<body>
    <div class="chatbox-container">
        <!-- Conversation List -->
        <div class="conversation-list">
            <div class="user">
                <img src="https://via.placeholder.com/40" alt="User Avatar" class="user-photo">
                <div class="user-details">
                    <span class="username">john_doe</span>
                    <span class="last-message">Hey, how's it going?</span>
                </div>
            </div>
        </div>

        <!-- Messaging Area -->
        <div class="messaging-area">
            <!-- Chat Header -->
            <div class="chat-header">
                <img src="https://via.placeholder.com/40" alt="Receiver Avatar" class="receiver-photo">
                <span class="receiver-name">john_doe</span>
            </div>

            <!-- Chat Area -->
            <div class="chat-area" id="chat-area"></div>

            <!-- Typing Indicator -->
            <div class="typing-indicator" id="typing-indicator">
                <span>john_doe is typing...</span>
            </div>

            <!-- Emoji Picker (hidden initially) -->
            <div class="emoji-picker" id="emoji-picker">
                <span class="emoji">😀</span>
                <span class="emoji">😂</span>
                <span class="emoji">😍</span>
                <span class="emoji">😎</span>
                <span class="emoji">👍</span>
                <span class="emoji">❤️</span>
                <span class="emoji">🎉</span>
                <span class="emoji">💡</span>
            </div>

            <!-- Message Input Bar -->
            <div class="message-input-area">
                <button id="emoji-button"><i class="fas fa-smile"></i></button>
                <button id="image-upload"><i class="fas fa-camera"></i></button>
                <input type="file" id="file-upload" hidden accept="image/*">
                <input type="text" id="message-input" placeholder="Type a message...">
                <button id="send-button"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <script src="../js/chatss.js"></script>
</body>
</html>
