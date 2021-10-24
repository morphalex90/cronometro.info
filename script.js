////////////////////// Loader fadeout
var s = document.getElementsByClassName('loader');
s = s[0].style;
s.opacity = 1;
(function fade() { (s.opacity -= .1) < 0 ? s.display = "none" : setTimeout(fade, 40) })();

////////////////////// Click to start / pause
document.querySelector('.play-pause').addEventListener('click', (e) => {
	if (document.querySelector('.play-pause').getAttribute('data-mode') == 'play') {
		document.querySelector('.play-pause').innerHTML = '<i class="icon-pause2"></i> Pause';
		document.querySelector('.play-pause').setAttribute('data-mode', 'pause');
		start();
	} else {
		document.querySelector('.play-pause').innerHTML = '<i class="icon-play3"></i> Start';
		document.querySelector('.play-pause').setAttribute('data-mode', 'play');
		pause();
	}
});

////////////////////// Click to reset
document.querySelector('.reset').addEventListener('click', (e) => {
	document.querySelector('.play-pause').innerHTML = '<i class="icon-play3"></i> Start';
	document.querySelector('.play-pause').setAttribute('data-mode', 'play');
	stop();
});

////////////////////// Click to save Lap
var lapNumber = 1;
document.querySelector('.giro').addEventListener('click', (e) => {
	var lap = document.querySelector('.tempo').textContent;
	document.querySelector('.partials').insertAdjacentHTML('beforeend', '<tr><td>' + lapNumber + '</td><td>' + lap + '</td></tr>');
	lapNumber++;
});



var time;
var millesimi = 0;
var secondi = 0;
var minuti = 0;
var ore = 0;

function start() {
	cronometro();
}

function pause() {
	clearTimeout(time);
}

function stop() {
	clearTimeout(time);
	millesimi = secondi = minuti = ore = 0;
	show();
}

function show() {
	var tot = '';

	tot = tot + String(ore).padStart(2, '0') + ':';
	tot = tot + String(minuti).padStart(2, '0') + ':';
	tot = tot + String(secondi).padStart(2, '0') + ':';
	tot = tot + String(millesimi).padStart(3, '0');

	document.querySelector('.tempo').textContent = tot;
}

function cronometro() {

	millesimi = millesimi + (4);
	if (millesimi == 1000) {
		millesimi = 0;
		secondi++;
	}

	if (secondi == 60) {
		secondi = 0;
		minuti++;
	}

	if (minuti == 60) {
		minuti = 0;
		ore++;
	}

	show();
	time = setTimeout(function () { cronometro() }, 4);
}