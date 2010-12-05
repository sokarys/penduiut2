<div id="perso">
    <h2>Personnaliser le jeu</h2>
    <p>Entrez un mot en français ainsi que sa traduction en anglais pour l'ajouter au dictionnaire du jeu</p>
    <div id="carte">
	<form id="monForm" method="post"  action="" >
            <div id="contenuCarte">
                <p>Entrez un mot</p>
                <table>
                    <tr>
                        <td><label for="fr">Français: </label></td>
                        <td><input type="text" value="" name="mot" id="fr" size="14"/></td>
                    </tr>
                    <tr>
                        <td><label for="en">Anglais: </label></td>
                        <td><input type="text" value="" name="word" id="en" size="14"/></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="Ajouter" onclick="return verifForm();"/></td>
                        <td><label id="resultat"></label></td>
                    </tr>
                </table>
               
            </div>
	</form>
    </div>
</div>