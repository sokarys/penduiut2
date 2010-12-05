function verifForm(){
	// recuperation des mots
	var mot = document.getElementById("fr").value;
	var word = document.getElementById("en").value;

	if (mot == "") {
		alert('Saisir un mot en francais');
		document.getElementById("fr").focus();

	}else if (word == ""){
		alert('Saisir un mot en anglais');
		document.getElementById("en").focus();
	}else{
		$.ajax({
			type: "GET",
			url: "proxy_db.php",
			data: "word="+$("#en").val()+"&mot="+$("#fr").val(),
			success: function(msg) {
				checkResult(msg);
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
			  alert ('Erreur ' + textStatus + ' ' + errorThrown);
			}

		});
	}
}

// traite le rï¿½sultat de l'appel xmlHTTP et affiche les conclusions
function checkResult (result) {
	if(result == 0){
		$("#resultat").html("KO");
	}
	else {
		if(result == 1) {
			$("#resultat").html("OK");
		}
	}
}