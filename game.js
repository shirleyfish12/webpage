//generate a number first
const rndInt = Math.floor(Math.random() * 100);
console.log(rndInt);


let n1 = 0; //check loop
let n2 = 99;

let guess = prompt("Make your guess (between 0 to 99). Only can guess five times.");

if (rndInt > guess) {
    n1 = guess;
} else if (rndInt < guess) {
    n2 = guess
}


for (let i = 0; i < 5; i++) {

    let guess = prompt(`Make your guess (between ${n1} to ${n2}).`);

    if (guess === "") {
        alert("No input! Please input integer!");
        continue;

    } else if (guess) {
        let result = gameChk(guess);
        if (result) {
            break;
        } else if (result == 0) {
            i = 0;
            continue;
        }
    } else {
        alert("You exit the game");
        break;
    }
    alert("You still have " + (5 - i) + " times");

}


function gameChk(userInput) {

    if (userInput == rndInt) {
        alert("You win! The number is " + rndInt);
        return true;

    } else if (isNaN(userInput)) {
        alert("Please input number")
        return 0;
    } else {
        alert("Please try again!");
    }

}

function Youlose(times) {

    if (times == 4) {

        alert("You lose!");

    }
}


// console.log(guess);
console.log(a);