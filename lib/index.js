let objDate = new Date();
let hour = objDate.getHours();
let day = objDate.getDay();
let weekdays = ['Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'];
let minutes = objDate.getMinutes();
let days = document.getElementsByClassName('dag');


//document.getElementById('date').innerHTML = objDate;
//document.getElementById('hour').innerHTML += hour;
//document.getElementById('minute').innerHTML += minutes;
//document.getElementById('day').innerHTML += `${day} - ${weekdays[day]}`;

let openOrClosed = document.getElementById('openOrClosed');

function showOpenOrClosed(element){
    if (objDate.getHours() >= 12 && objDate.getHours() <= 22){
        element.style.color = 'green';
        if (60 - minutes < 10)
            element.innerHTML = `Open - Closes in: ${22 - hour}:0${60 - minutes}`;
        else
            element.innerHTML =  `Open - Closes in: ${22 - hour}:${60 - minutes}`;

    } else {
        element.style.color = 'red';
        if (hour >= 22)
            element.innerHTML = `Closed - Opens in: ${24 - hour + 12}`;
        else
            element.innerHTML = `Closed - Opens in: ${12 - hour}`;
    }
}

showOpenOrClosed(openOrClosed);
for(let index = 0; index <days.length; index++) {
    if(days[index].innerHTML == weekdays[day]) {
        showOpenOrClosed(days[index + 1]);
        days[index].style.color = 'green';
    }
}

document.getElementById('openOrClosedMessage').innerHTML = openOrClosedMessage()

// Hamburger menu toggle
const hamburgerBtn = document.getElementById('hamburgerBtn');
const navMenu = document.getElementById('navMenu');

hamburgerBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburgerBtn.classList.toggle('active');
});

// Theme toggle
const themeBtn = document.getElementById('themeBtn');
const body = document.body;

const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'light') {
    body.classList.add('light-mode');
}

themeBtn.addEventListener('click', () => {
    body.classList.toggle('light-mode');
    const currentTheme = body.classList.contains('light-mode') ? 'light' : 'dark';
    localStorage.setItem('theme', currentTheme);
});