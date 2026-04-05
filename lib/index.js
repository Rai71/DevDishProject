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