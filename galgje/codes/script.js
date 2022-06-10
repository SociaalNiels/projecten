
const bodyParts = document.querySelectorAll('.body-parts');
const wordContainer = document.querySelector('.word-container');
let wrongLettersContainer = document.querySelector('.wrong-letters-container');
const mobileBtns = document.querySelectorAll('.mobile-btns > button');
const notification = document.querySelector('.notification');
const results = document.querySelector('.results');
const resultsTxt = document.querySelector('.results-txt');
const resultsBtn = document.querySelector('.results-btn');

const words = ['javaScript', 'swift', 'scala', 'go', 'python', 'elm', 'ruby', 'csharp', 'rust', 'cplusplus'];

let randomWord;
let prevRandomWord;
let letters;
let letterBoxes;
let correctLetters = [];
let wrongLetters = [];
let playable = true;


let getRandomWord = () => {

  do {
    randomWord = words[Math.floor(Math.random() * words.length)];
  } while (randomWord === prevRandomWord);
  prevRandomWord = randomWord;
  letters = randomWord.split('');
  letters.forEach((letter) => {
    const letterBox = document.createElement('div');
    letterBox.classList.add('letter');
    letterBox.innerText = letter;
    wordContainer.appendChild(letterBox);
    letterBoxes = document.querySelectorAll('.letter');
  })
}


let displayCorrectLetters = (key) => {

  if (!correctLetters.includes(key)) {
    letters.forEach((letter) => {
      if (letter === key) {

        correctLetters.push(key);
      
        letterBoxes.forEach((letterBox) => {
          if (letterBox.innerText === letter) {
            letterBox.style.color = '#FFF';
          }
        })
      }
    })
  } else {
    showNotification();
  }
  
  if (letters.length === correctLetters.length) {
    playable = false;
    results.style.display = 'flex';
    resultsTxt.innerText = 'GG! je hebt gewonnen 😏';
  }
}


let displayWrongLetters = (key) => {
  wrongLetters.push(key);
  const wrongLetterBox = document.createElement('div');
  wrongLetterBox.classList.add('wrong-letter');
  wrongLetterBox.innerText = wrongLetters[wrongLetters.length - 1];
  wrongLettersContainer.appendChild(wrongLetterBox);

  if (wrongLetters.length === 7) {
    playable = false;
    results.style.display = 'flex';
    resultsTxt.innerText = `je hebt verloren... 😓
                            het woord was: ${randomWord}`;
  }
}


let displayHangMan = () => {
  bodyParts.forEach((bodyPart) => {
    if (bodyPart.dataset.num == wrongLetters.length) {
      bodyPart.style.display = 'block';
    }
  })
}


let showNotification = () => {
  notification.classList.add('show');
  setTimeout(() => {
    notification.classList.remove('show');
  }, 1500);
}


let init = () => {
  bodyParts.forEach((bodyPart) => {
    bodyPart.style.display = 'none'
  });
  results.style.display = 'none';
  wordContainer.innerHTML = ``;
  wrongLettersContainer.innerHTML = ``;
  correctLetters = [];
  wrongLetters = [];
  playable = true;
  getRandomWord();
}

getRandomWord();


window.addEventListener('keyup', (e) => {
  if (playable) {

    if (e.key.match(/[a-zA-Z]+/g) && e.key.length === 1) {

      const key = e.key.toLowerCase();
      if (letters.includes(key)) {
        displayCorrectLetters(key);
      } else {
        if (!wrongLetters.includes(key)) {
          displayWrongLetters(key);
          displayHangMan();
        } else {
          showNotification();
        }
      }
    }
  }
})


mobileBtns.forEach((mobileBtn) => {
  mobileBtn.addEventListener('click', () => {
    if (playable) {
      if (letters.includes(mobileBtn.dataset.key)) {
        displayCorrectLetters(mobileBtn.dataset.key);
      } else {
        if (!wrongLetters.includes(mobileBtn.dataset.key)) {
          displayWrongLetters(mobileBtn.dataset.key);
          displayHangMan();
        } else {
          showNotification();
        }
      }
    }
  })
})


resultsBtn.addEventListener('click', () => {
  init();
})
