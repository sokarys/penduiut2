var erreur = -1;

$(function(){
	updateStyle();

	newGame();

   	$("#keybord span").click(function(){
		var $this = $(this),character = $this.html();
	        if($this.hasClass("key_on")){
			$this.addClass("key_off").removeClass("key_on");
			requete($('#reponse').html().split("#")[1],character);
		}
	});
 });

function newGame(){
	erreur = -1;
	$('#keybord span').removeClass("key_off").addClass("key_on");
	$('#result').html("");
	$.ajax({
		type:"GET", url:"proxy.php?action=commencer&cheat=1",success: function(msg){
			reponse(msg);
		}	
	});
}



function getFormatText(str){
	var nblettre = str.length;
	var i = 0;
	var sr = "";
	for(i=0; i<nblettre ; i++){
		sr += "\<span class=\"lettre\"\>" +str[i] + "\</span\>\n";
	}

	return sr;
}

function updateStyle(){
	$('.lettre').button();
	$('#keybord td').button();
}


function reponse(msg){	
	$('#reponse').text(msg);
	$('#motfr').html(getFormatText($('#reponse').html().split("#")[3]));
	$('#moten').html(getFormatText($('#reponse').html().split("#")[4]));
	updateStyle();
	addError();
	if(!win()){ loose(); }
}

function addError(){
	var t = $('#reponse').html().split("#")[0];
	if($('#motfr').html().indexOf(t) < 0 && $('#moten').html().indexOf(t) < 0){
		erreur = erreur + 1;
		$('#imgPendu').attr({ src: erreur+".jpg", alt: erreur+".jpg" });
	}
}

function requete(session, lettre){
	$.ajax({
		type:"GET",
		url:"proxy.php?session="+session+"&action=jouer&cheat=1&lettre="+lettre,
		success: function(msg){reponse(msg);}	
	});
}

function win(){
	if($('#motfr').html().indexOf("_") < 0 && $('#moten').html().indexOf("_") < 0 ){
		$('#result').html('You WIN!!<br /><a id="newgame" href=\"javascript:newGame();\">Nouvelle Partie</a>');
		$('#keybord span').removeClass("key_on").addClass("key_off");
		return true;
	}
	return false;
}

function loose(){
	if(erreur == 10){
		$('#result').html('You FAIIILLL!<br /><a id="newgame" href=\"javascript:newGame();\">Nouvelle Partie</a>');
		openResult();
		$('#keybord span').removeClass("key_on").addClass("key_off");
	}
}

function openResult(){
	$('#motfr').html(getFormatText($('#reponse').html().split("#")[5]));
	$('#moten').html(getFormatText($('#reponse').html().split("#")[6]));
	updateStyle();
}
