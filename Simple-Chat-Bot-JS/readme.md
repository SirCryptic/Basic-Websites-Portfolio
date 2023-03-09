# Chatbot

This is a simple chatbot created with JavaScript that can chat with you and try to answer your questions. You can try chatting with it by typing messages in the input field and pressing enter. The chatbot will try to respond with appropriate messages based on the text you enter.

## How to use

To use the chatbot, follow these steps:

1. Open the `index.html` file in your browser.
2. Type a message in the input field and press enter.
3. The chatbot will try to respond with an appropriate message.

## Example commands

Here are some example commands that the chatbot can respond to:

- Hi
- Hello
- How are you?
- What is your name?
- What do you do?
- What is your purpose?
- Bye
- Goodbye
- Thanks
- Thank you
- Who created you?
- Tell me a joke 1 to 32
- Do you like pizza?
- What is the weather like today?
- What is the capital of UK?
- What is the largest planet in our solar system?
- What is the distance between the Earth and the Moon?
- What is the highest mountain in the world?

## How it works

The chatbot is implemented using JavaScript and it uses a dictionary object to store the responses to various input messages. When the user types a message in the input field and presses enter, the chatbot looks up the message in its dictionary and tries to find a suitable response. If a response is found, the chatbot displays it in the output area. If no response is found, the chatbot displays a default message.

```javascript
let chatbotResponses = {
    'hi': 'Hello!',
    'hello': 'Hi there!',
    // more responses here
};
```
