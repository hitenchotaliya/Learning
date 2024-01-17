
let RandomNumber = Math.floor(Math.random()*10)+1;
let ChancesTry = 0;
// let GuessNumber = 8;

function PlayGuessingGame() {

    let GuessNumber = parseInt(prompt("Guess Number between 0 to 10"))
    ChancesTry++;

    if (RandomNumber === GuessNumber) {
      alert("Congratulation your guess is matched" + ` Your attempts is ${ChancesTry}`)
    }
    else {
       alert("Incorrect Try another number")
        PlayGuessingGame();
    }
}

PlayGuessingGame();
