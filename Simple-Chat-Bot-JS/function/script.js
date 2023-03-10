const chatForm = document.querySelector('.chat-input form');
const chatInput = document.querySelector('.chat-input input');
const chatOutput = document.querySelector('.chat-output');

let chatbotResponses = {
    'hi': 'Hello!',
    'hello': 'Hi there!',
    'how are you': "I'm doing well, thank you for asking.",
    'what is your name': "My name is Chatbot!",
    'what do you do': "I'm here to chat with you!",
    'what is your purpose': "My purpose is to chat with you and try to assist with any questions or problems you may have!",
    'bye': 'Goodbye!',
    'goodbye': 'See you later!',
    'thanks': 'You are welcome!',
    'thank you': 'No problem!',
    'who created you': 'I was created by SirCryptic.',
    'what is the meaning of life': 'That is a philosophical question that people have been trying to answer for centuries.',
    'tell me a joke 1': "Why did the tomato turn red? Because it saw the salad dressing!",
    'tell me a joke 2': 'Why was the computer cold? Because it left its Windows open!',
    'tell me a joke 3': 'Why was the JavaScript developer sad? Because he didn\'t know how to "null" his feelings',
    'tell me a joke 4': 'Why do programmers always mix up Christmas and Halloween? Because Oct 31 equals Dec 25.',
    'tell me a joke 5': 'Why do programmers hate nature? It has too many bugs.',
    'tell me a joke 6': 'Why do programmers hate nature? It has too many bugs.',
    'tell me a joke 7': 'Why do we tell actors to "break a leg?" Because every play has a cast.',
    'tell me a joke 8': 'Why did the programmer quit his job? He didn\'t get arrays.',
    'tell me a joke 9': 'Why do programmers prefer dark chocolate? Because it has a higher byte rate.',
    'tell me a joke 10': 'Why do programmers prefer dark chocolate? Because it has a higher byte rate.',
    'tell me a joke 11': 'Why did the programmer go broke? Because he used up all his cache.',
    'tell me a joke 12': 'Why do programmers hate nature? It has too many bugs.',
    'tell me a joke 13': 'Why do we tell actors to "break a leg?" Because every play has a cast.',
    'tell me a joke 14': 'Why did the programmer quit his job? He didn\'t get arrays.',
    'tell me a joke 15': 'Why do programmers prefer dark chocolate? Because it has a higher byte rate.',
    'tell me a joke 16': 'Why did the programmer go broke? Because he used up all his cache.',
    'tell me a joke 17': 'Why do programmers prefer dark mode? Because light attracts bugs.',
    'tell me a joke 18': 'Why do programmers wear glasses? Because they can\'t C#',
    'tell me a joke 19': 'Why was the JavaScript developer sad? Because he didn\'t know how to "null" his feelings',
    'tell me a joke 20': 'Why do programmers always mix up Christmas and Halloween? Because Oct 31 equals Dec 25.',
    'tell me a joke 21': 'Why do programmers hate nature? It has too many bugs.',
    'tell me a joke 22': 'Why do we tell actors to "break a leg?" Because every play has a cast.',
    'tell me a joke 23': 'Why did the programmer quit his job? He didn\'t get arrays.',
    'tell me a joke 24': 'Why do programmers prefer dark chocolate? Because it has a higher byte rate.',
    'tell me a joke 25': 'Why did the programmer go broke? Because he used up all his cache.',
    'tell me a joke 26': 'Why do programmers prefer dark mode? Because light attracts bugs.',
    'tell me a joke 27': 'Why do programmers wear glasses? Because they can\'t C#',
    'tell me a joke 28': 'Why was the JavaScript developer sad? Because he didn\'t know how to "null" his feelings',
    'tell me a joke 29': 'Why do programmers always mix up Christmas and Halloween? Because Oct 31 equals Dec 25.',
    'tell me a joke 30': 'Why do we tell actors to "break a leg?" Because every play has a cast.',
    'tell me a joke 31': "Why do programmers prefer dark mode? Because light attracts bugs.",
    'tell me a joke 32': 'Why do programmers wear glasses? Because they can\'t C#',
    'do you like pizza': "I don't have a mouth, so I can't eat pizza, but I have heard that it is delicious!",
    'what is the weather like today': 'I am sorry, I do not have access to live weather data. Please check your local news or weather website for current weather conditions.',
    'what is the capital of UK': 'The capital of United Kingdom is London.',
    'what is the largest planet in our solar system': 'Jupiter is the largest planet in our solar system.',
    'what is the distance between the Earth and the Moon': 'The average distance between the Earth and the Moon is about 238,855 miles (384,400 kilometers).',
    'what is the highest mountain in the world': 'Mount Everest, located in the Himalayas, is the highest mountain in the world.',
    'what is the largest animal on Earth': 'The blue whale is the largest animal on Earth.',
    'default': "I'm sorry, I didn't understand that.",
    'how old are you': "I don't have an age, I'm a machine!",
    'where are you from': "I was created by a developer as a Demo.",
    'what is the meaning of life': "That's a philosophical question. What do you think it is?",
    'do you like music': "I don't have the ability to like or dislike things, but I can tell you about different types of music if you'd like!",
    'what is the weather like today': "I'm sorry, I don't have that information. You can try checking a weather app or website.",
    'can you recommend a good book': "Sure, what genre are you interested in?",
    'what is your favorite movie': "As an AI, I don't have the ability to have favorite things. But I can suggest some popular movies if you'd like!",
    'what are your hobbies': "As an AI, I don't have hobbies in the traditional sense, but I do enjoy learning new things and helping people!",
    'what is the capital of France': "The capital of France is Paris.",
    'what is the largest country in the world': "Russia is the largest country in the world by land area.",
    'what is the tallest mountain in the world': "Mount Everest is the tallest mountain in the world.",
    'what is the deepest ocean': "The Pacific Ocean is the deepest ocean in the world.",
    'what is the largest desert in the world': "The largest desert in the world is the Sahara Desert.",
    'what is the highest waterfall in the world': "Angel Falls in Venezuela is the highest waterfall in the world.",
    'what is the fastest land animal': "The cheetah is the fastest land animal, capable of running up to 70 miles per hour!",
    'what is your favorite color': "I don't have a favorite color, but I can appreciate them all!",
    'what is your favorite food': "I don't eat, but I can help you find a good restaurant if you'd like!",
    'what is your favorite book': "I don't read books, but I can recommend some popular ones if you're interested!",
    'what is your favorite sport': "As an AI, I don't have a favorite sport. But I can tell you some of the most popular ones! Some of the most popular sports include football, basketball, soccer, baseball, rugby, and tennis.",
    'what is your favorite hobby': "I don't have hobbies, but I enjoy helping people!",
    'what is your favorite music': "I don't have personal taste in music, but I can suggest some popular songs and artists!",
  };

chatForm.addEventListener('submit', event => {
  event.preventDefault();
  const userInput = chatInput.value.trim().toLowerCase();
  if (userInput === '') return;
  addChatMessage(userInput, 'user');
  chatInput.value = '';
  sendChatMessage(userInput);

  // Add the function call here:
  chatbotResponse(userInput);
});
  function addChatMessage(message, sender) {
    const chatMessage = document.createElement('div');
    chatMessage.classList.add('chat-message', `chat-message-${sender}`);
    chatMessage.innerText = message;
    chatMessage.appendChild(makeBubble());
    chatOutput.appendChild(chatMessage);
    chatOutput.scrollTop = chatOutput.scrollHeight;
  }
  
  function makeBubble() {
    const bubble = document.createElement('div');
    bubble.classList.add('bubble');
    for (let i = 0; i < 5; i++) {
      const circle = document.createElement('div');
      circle.classList.add('circle');
      bubble.appendChild(circle);
    }
    return bubble;
  }
  
  function sendChatMessage(message) {
    let chatbotResponse;
    if (chatbotResponses.hasOwnProperty(message)) {
      chatbotResponse = chatbotResponses[message];
    } else if (message.toLowerCase().startsWith('tell me a joke')) {
      // Select a random joke key from the chatbotResponses object
      const jokeKeys = Object.keys(chatbotResponses).filter(key => key.startsWith('tell me a joke'));
      const randomKey = jokeKeys[Math.floor(Math.random() * jokeKeys.length)];  
      // Use the random key to get the joke from the chatbotResponses object
      chatbotResponse = chatbotResponses[randomKey];
    } else if (message.toLowerCase().startsWith('wiki')) {
      const searchTerm = message.slice(5).trim();
      const apiUrl = `https://en.wikipedia.org/api/rest_v1/page/summary/${encodeURIComponent(searchTerm)}`;
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          if (data.extract) {
            chatbotResponse = data.extract;
          } else {
            chatbotResponse = 'Sorry, I could not find information on that topic.';
          }
          addChatMessage(chatbotResponse, 'chatbot');
        })
        .catch(error => {
          console.error(error);
          chatbotResponse = 'Sorry, an error occurred while searching for that topic.';
          addChatMessage(chatbotResponse, 'chatbot');
        });
      } else if (message.toLowerCase().startsWith('weather')) {
        const city = message.slice(7).trim();
        const apiUrl = `https://wttr.in/${encodeURIComponent(city)}?format=%C+%t`;
        fetch(apiUrl)
          .then(response => response.text())
          .then(data => {
            if (data) {
              chatbotResponse = `The weather in ${city} is ${data}.`;
            } else {
              chatbotResponse = 'Sorry, I could not find weather information for that location.';
            }
            addChatMessage(chatbotResponse, 'chatbot');
          })
          .catch(error => {
            console.error(error);
            chatbotResponse = 'Sorry, an error occurred while searching for weather information.';
            addChatMessage(chatbotResponse, 'chatbot');
          });
        } else if (message.toLowerCase().startsWith('time')) {
          const words = message.split(' ');
          let timezone = '';
          if (words.includes('my')) {
            timezone = 'local';
          } else {
            timezone = words.slice(1).join(' ');
          }
          let timezoneName = '';
          switch (timezone.toLowerCase()) {
            case 'uk':
            case 'united kingdom':
              timezoneName = 'Europe/London';
              break;
            case 'russia':
              timezoneName = 'Europe/Moscow';
              break;
            case 'morocco':
              timezoneName = 'Africa/Casablanca';
              break;
            case 'france':
              timezoneName = 'Europe/Paris';
              break;
            case 'spain':
              timezoneName = 'Europe/Madrid';
              break;
            case 'united states':
              timezoneName = 'America/New_York';
              break;
            case 'canada':
              timezoneName = 'America/Toronto';
              break;
            case 'mexico':
              timezoneName = 'America/Mexico_City';
              break;
            case 'brazil':
              timezoneName = 'America/Sao_Paulo';
              break;
            case 'argentina':
              timezoneName = 'America/Argentina/Buenos_Aires';
              break;
            case 'australia':
              timezoneName = 'Australia/Sydney';
              break;
            case 'new zealand':
              timezoneName = 'Pacific/Auckland';
              break;
            case 'japan':
              timezoneName = 'Asia/Tokyo';
              break;
            case 'south korea':
              timezoneName = 'Asia/Seoul';
              break;
            case 'china':
              timezoneName = 'Asia/Shanghai';
              break;
            case 'india':
              timezoneName = 'Asia/Kolkata';
              break;
            default:
              timezoneName = timezone;
              break;
          }
          const apiUrl = timezone === 'local' ? 'https://worldtimeapi.org/api/ip' : `https://worldtimeapi.org/api/timezone/${encodeURIComponent(timezoneName)}`;
          fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
              if (data.datetime) {
                const datetime = new Date(data.datetime);
                const timeString = timezone === 'local' ? 'Your local time is ' : `The current time in ${timezone} is `;
                chatbotResponse = timeString + datetime.toLocaleTimeString();
              } else {
                chatbotResponse = 'Sorry, an error occurred while getting the current time.';
              }
              addChatMessage(chatbotResponse, 'chatbot');
            })
            .catch(error => {
              console.error(error);
              chatbotResponse = 'Sorry, an error occurred while getting the current time.';
              addChatMessage(chatbotResponse, 'chatbot');
            });
        
          } else if (message.toLowerCase().startsWith('google')) {
            const searchTerm = message.slice(6).trim();
            const searchUrl = `https://www.google.com/search?q=${encodeURIComponent(searchTerm)}`;
            
            const confirmSearch = confirm(`Are you sure you want to search for "${searchTerm}" on Google?`);
            
            if (confirmSearch) {
              window.open(searchUrl);
            } else {
              chatbotResponse = 'Okay, no problem.';
              addChatMessage(chatbotResponse, 'chatbot');
            }
          } else {
            chatbotResponse = chatbotResponses['default'];
            chatbotResponses[message] = 'I do not have a response for that yet. What should I say?';
          }
          
          addChatMessage(chatbotResponse, 'chatbot');
  }
  
  function addChatMessage(message, sender) {
    const chatMessage = document.createElement('div');
    chatMessage.classList.add('chat-message', `chat-message-${sender}`);
    chatMessage.innerText = message;
    
    if (sender === 'user') {
      const editButton = document.createElement('button');
      editButton.innerText = 'Teach';
      editButton.classList.add('edit-button');
      editButton.addEventListener('click', () => {
        const response = prompt('What should I say instead?');
        if (response) {
          chatbotResponses[message] = response;
          chatbotResponse = response;
          chatMessage.innerText = response;
        }
      });
      chatMessage.appendChild(editButton);
    }
    
    chatMessage.appendChild(makeBubble());
    chatOutput.appendChild(chatMessage);
    chatOutput.scrollTop = chatOutput.scrollHeight;
  }
  
  chatOutput.addEventListener('click', event => {
    const clickedMessage = event.target.closest('.chat-message');
    if (!clickedMessage) return;
    const clickedMessageText = clickedMessage.innerText.toLowerCase();
    if (clickedMessage.classList.contains('chat-message-user') && chatbotResponses[clickedMessageText]) {
      const response = prompt('What should I say instead?');
      if (response) {
        chatbotResponses[clickedMessageText] = response;
      }
    }
  });