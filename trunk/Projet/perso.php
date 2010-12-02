<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Personnalisation</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="lib/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
//<!--[CDATA[

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

// traite le r�sultat de l'appel xmlHTTP et affiche les conclusions
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
//]]-->
</script>
</head>

<body>
	<form id="monForm" method="post"  action="" >
		<div>
			<p>Entrer un mot: </p>
                        <label>Fran&ccedil;ais: </label>
			<input type="text" value="" name="mot" id="fr"/><br/>
                        <label>Anglais: </label>
			<input type="text" value="" name="word" id="en"/><br/>
			<input type="button" value="Ajouter" onclick="return verifForm();"/>
			<label id="resultat"></label>
		</div>
	</form>

</body>


</html>