jQuery(document).ready(function($){
	$('.loader').fadeOut();

    jQuery('[data-toggle="tooltip"]').tooltip();
	
	jQuery(document).on('click','.start',function(){
		jQuery(this).removeClass('start').addClass('pause');
		jQuery(this).html('Pausa');
		start();
	});
	
	jQuery(document).on('click','.pause',function(){
		jQuery(this).removeClass('pause').addClass('start');
		jQuery(this).html('Start');
		pause();
	});
	
	jQuery(document).on('click','.reset',function(){
		jQuery('.pause').removeClass('pause').addClass('start');
		stop();
	});
	
	jQuery(document).on('click','.giro',function(){
		jQuery(".parziali").append('<tr><td>'+jQuery('.tempo').html()+'</td></tr>');
	});
});


var time;
var centesimi = 0;
var secondi = 0;
var minuti = 0;
var ore = 0;

function start(){
	cronometro();
}

function pause(){
	clearTimeout(time);
}

function stop(){
	clearTimeout(time);
	centesimi = secondi = minuti = ore = 0;
	mostra();
}

function mostra(){
	var tot = '';

	if( ore < 10 ) {
		tot = tot+'0';
	}

	tot = tot+ore+':';

	if( minuti < 10 ) {
		tot = tot+'0';
	}

	tot = tot+minuti+':';

	if( secondi < 10 ) {
		tot = tot+'0';
	}

	tot = tot+secondi+':';
	tot = tot+centesimi;
	jQuery('.tempo').html(tot);
}

function cronometro(){
	
	centesimi++;
	if( centesimi == 100 ){
		centesimi = 0;
		secondi++;
	}
	
	if( secondi == 60 ){
		secondi = 0;
		minuti++;
	}
	
	if( minuti == 60 ){
		minuti = 0;
		ore++;
	}
	
	mostra();
	time = setTimeout(function(){ cronometro() }, 10);
}