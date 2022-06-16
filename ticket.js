//IF statement

let age1 = prompt("Please input your age (Must bigger than 0)");

console.log(age1, typeof age1);

if (age1 === "") {
    // user pressed OK, but the input field was empty
    alert("No input");

} else if (age1 === null) {
    // user hit cancel
    alert("You Press cancel");
} else if (age1) {
    // user typed something and hit OK
    checkTicker();
}

//If the user input something, check the data and type
function checkTicker() {

    if (isNaN(age1)) {
        alert("Please input number")
    } else if ((age1 < 0) || (age1 > 150)) {
        alert("Please input again, must be bigger than 0 or smaller than 150");
    } else if ((age1 >= 0) && (age1 <= 12)) {
        alert("Your ticker is $100");
    } else if ((age1 >= 13) && (age1 <= 64)) {
        alert("Your ticker is $250");
    } else if ((age1 >= 65) && (age1 <= 150)) {
        alert("Your ticker is $150");
    }
}


//Test variables

var elems = 0;
var height = 20;
var width = 300;
var padding = 10;

function makeElem(type) {
    var elem = document.createElement(type);
    //elem.style.position = 'absolute';
    //elem.style.top = ((elems * height) + (elems * padding)) + 'px';
    elem.style.left = padding + 'px';
    elem.style.border = 'none';
    document.body.appendChild(elem);
    elems++;
    return elem;
}

var lineBreak = "<br/>"; //\r\n wouldn't work for some reason!
var tab = ' - '; //\t wouldn't work either! Neither does 'nbsp'!
var currentDiv;

var empty_string_check = makeElem('div');
var null_check = makeElem('div');
var undefined_check = makeElem('div');
var false_check = makeElem('div');
var zero_check = makeElem('div');
var nan_check = makeElem('div');


function emptyStringTest(val) {
    var prefix;
    if (typeof val === 'string')
        prefix = tab + 'variable = "' + val + '"; ('
    else
        prefix = tab + 'variable = ' + val + '; ('

    if (val === "")
        currentDiv.innerHTML += "<b>" + prefix + "true) typeof variable = " + typeof val + "</b>" + lineBreak + lineBreak;
    else
        currentDiv.innerHTML += prefix + "false) typeof variable = " + typeof val + lineBreak + lineBreak;
}

currentDiv = empty_string_check;

currentDiv.innerHTML = '<b>Empty String Test:</b>' + lineBreak;
currentDiv.innerHTML += lineBreak;
currentDiv.innerHTML += '<b>if(variable === "")</b>' + lineBreak + lineBreak;

emptyStringTest("");
emptyStringTest(null);
emptyStringTest(undefined);
emptyStringTest(false);
emptyStringTest(0);
emptyStringTest(parseInt("Stupid String!"));






function nullTest(val) {
    var prefix;
    if (typeof val === 'string')
        prefix = tab + 'variable = "' + val + '"; ('
    else
        prefix = tab + 'variable = ' + val + '; ('

    if (val === null)
        currentDiv.innerHTML += "<b>" + prefix + "true) typeof variable = " + typeof val + "</b>" + lineBreak + lineBreak;
    else
        currentDiv.innerHTML += prefix + "false) typeof variable = " + typeof val + lineBreak + lineBreak;
}

currentDiv = null_check;

currentDiv.innerHTML = lineBreak + '<b>Null Test:</b>' + lineBreak;
currentDiv.innerHTML += lineBreak;
currentDiv.innerHTML += '<b>if(variable === null)</b>' + lineBreak + lineBreak;

nullTest("");
nullTest(null);
nullTest(undefined);
nullTest(false);
nullTest(0);
nullTest(parseInt("Stupid String!"));






function undefinedTest(val) {
    var prefix;
    if (typeof val === 'string')
        prefix = tab + 'variable = "' + val + '"; ('
    else
        prefix = tab + 'variable = ' + val + '; ('

    if (val === undefined)
        currentDiv.innerHTML += "<b>" + prefix + "true) typeof variable = " + typeof val + "</b>" + lineBreak + lineBreak;
    else
        currentDiv.innerHTML += prefix + "false) typeof variable = " + typeof val + lineBreak + lineBreak;
}

currentDiv = undefined_check;

currentDiv.innerHTML = lineBreak + '<b>Undefined Test:</b>' + lineBreak;
currentDiv.innerHTML += lineBreak;
currentDiv.innerHTML += '<b>if(variable === undefined)</b>' + lineBreak + lineBreak;

undefinedTest("");
undefinedTest(null);
undefinedTest(undefined);
undefinedTest(false);
undefinedTest(0);
undefinedTest(parseInt("Stupid String!"));






function falseTest(val) {
    var prefix;
    if (typeof val === 'string')
        prefix = tab + 'variable = "' + val + '"; ('
    else
        prefix = tab + 'variable = ' + val + '; ('

    if (val === false)
        currentDiv.innerHTML += "<b>" + prefix + "true) typeof variable = " + typeof val + "</b>" + lineBreak + lineBreak;
    else
        currentDiv.innerHTML += prefix + "false) typeof variable = " + typeof val + lineBreak + lineBreak;
}

currentDiv = false_check;

currentDiv.innerHTML = lineBreak + '<b>False Test:</b>' + lineBreak;
currentDiv.innerHTML += lineBreak;
currentDiv.innerHTML += '<b>if(variable === false)</b>' + lineBreak + lineBreak;

falseTest("");
falseTest(null);
falseTest(undefined);
falseTest(false);
falseTest(0);
falseTest(parseInt("Stupid String!"));





function zeroTest(val) {
    var prefix;
    if (typeof val === 'string')
        prefix = tab + 'variable = "' + val + '"; ('
    else
        prefix = tab + 'variable = ' + val + '; ('

    if (val === 0)
        currentDiv.innerHTML += "<b>" + prefix + "true) typeof variable = " + typeof val + "</b>" + lineBreak + lineBreak;
    else
        currentDiv.innerHTML += prefix + "false) typeof variable = " + typeof val + lineBreak + lineBreak;
}

currentDiv = zero_check;

currentDiv.innerHTML = lineBreak + '<b>Zero Test:</b>' + lineBreak;
currentDiv.innerHTML += lineBreak;
currentDiv.innerHTML += '<b>if(variable === 0)</b>' + lineBreak + lineBreak;

zeroTest("");
zeroTest(null);
zeroTest(undefined);
zeroTest(false);
zeroTest(0);
zeroTest(parseInt("Stupid String!"));





function nanTest(val) {
    var prefix;
    if (typeof val === 'string')
        prefix = tab + 'variable = "' + val + '"; ('
    else
        prefix = tab + 'variable = ' + val + '; ('

    if (!parseFloat(val) && val !== 0 && typeof val === "number")
        currentDiv.innerHTML += "<b>" + prefix + "true) typeof variable = " + typeof val + "</b>" + lineBreak + lineBreak;
    else
        currentDiv.innerHTML += prefix + "false) typeof variable = " + typeof val + lineBreak + lineBreak;
}

currentDiv = nan_check;

currentDiv.innerHTML = lineBreak + '<b>NaN Test:</b>' + lineBreak;
currentDiv.innerHTML += lineBreak;
currentDiv.innerHTML += '<b>if(!parseFloat(variable) && variable !== 0 && typeof variable === "number")</b>' + lineBreak + lineBreak;

nanTest("");
nanTest(null);
nanTest(undefined);
nanTest(false);
nanTest(0);
nanTest(parseInt("Stupid String!"));