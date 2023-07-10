<!DOCTYPE html>
<html>
<head>
    <title>Language Learning Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        #chat-container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            padding: 30px;
            background-color: #333;
            color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #chat-input {
            background-color: #fff;
            color: #000;
            border-radius: 4px 0 0 4px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #ff69b4;
            border-color: #ff69b4;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #ff1493;
            border-color: #ff1493;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="chat-container" class="container">
        <h3 class="mb-4">Chat with the Language Learning Assistant</h3>
        <div id="chat-log"></div>
        <form id="chat-form">
            <div class="input-group mb-3">
                <input type="text" id="chat-input" class="form-control" placeholder="Type your message here" autocomplete="off">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>

    <script>
        // Chatbot logic
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const chatLog = document.getElementById('chat-log');

        chatForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const message = chatInput.value;
            if (message.trim() === '') return;
            appendMessage('You: ' + message);

            // Make API call to ChatGPT using fetch or axios
            // Replace `YOUR_API_KEY` and `YOUR_CHATGPT_ENDPOINT` with your actual values
            fetch('https://chat.openai.com/?model=text-davinci-002-render-sha', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer YOUR_API_KEY',
                },
                body: JSON.stringify({
                    'model': 'gpt-3.5-turbo',
                    'messages': [
                        { 'role': 'system', 'content': 'You are a helpful assistant.' },
                        { 'role': 'user', 'content': message }
                    ]
                })
            })
            .then(response => response.json())
            .then(data => {
                const reply = data.message.content;
                appendMessage('Assistant: ' + reply);
            })
            .catch(error => {
                console.error('Error:', error);
            });

            chatInput.value = '';
        });

        function appendMessage(message) {
            const messageElement = document.createElement('p');
            messageElement.textContent = message;
            chatLog.appendChild(messageElement);
        }
    </script>
</body>
</html>
