# Chatbot [[Demo]](https://sircryptic.github.io/Basic-Websites-Portfolio/Simple-Chat-Bot-JS/ChatBot/index.html)

This is a simple chatbot project written in JavaScript with a HTML Frontend. The purpose of this project is to provide a basic template for learning and building chatbots.

## Features

The chatbot has the following features:

- Responds to user input with pre-programmed messages.
- Asks the user for input when it does not understand the user's message.
- Has a limited set of responses that it can give.

## How to Use

To use the chatbot, simply clone the repository and open the index.html file in a web browser.

You can interact with the chatbot by typing messages into the input field and hitting enter. The chatbot will respond with one of its pre-programmed messages.

## Modifying the Chatbot
This chatbot project is meant to be a starting point for your own chatbot development. You can modify the chatbot by changing the pre-programmed messages or adding new ones.

To modify the chatbot, open the script.js file in a text editor. You will see that the chatbot is programmed with a set of possible responses. You can edit these responses or add new ones by modifying the chatbotResponses array.

```javascript
let chatbotResponses = [
  {
    input: ['hi', 'hello', 'hey'],
    output: 'Hello there!'
  },
  {
    input: ['how are you', 'how are you doing'],
    output: 'I am doing well, thank you.'
  },
  // Add your own responses here
];
```

### You can also modify the code that handles user input in the handleInput function.

```javascript
function handleInput() {
  let userInput = inputField.value.toLowerCase();

  let chatbotResponse = getResponse(userInput);

  if (chatbotResponse) {
    addMessage(chatbotResponse, 'chatbot');
  } else {
    addMessage("I'm sorry, I don't understand. Can you rephrase that?", 'chatbot');
  }

  inputField.value = '';
}
```

By default, the chatbot will respond with a message that says it doesn't understand when it receives input that it doesn't recognize. You can modify this message or change the behavior of the chatbot when it receives unrecognized input by changing the code in the handleInput function.

### Conclusion
This chatbot project is a basic learning template that you can use and modify to create your own chatbots. By changing the pre-programmed responses or adding new ones, you can create a chatbot that is tailored to your specific needs.
