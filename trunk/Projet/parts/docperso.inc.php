<div id="doc">
    <h2>Documentation de la personnalisation</h2>
    <p>La partie personnalisation permet à l'utilisateur d'ajouter des mots dans la base de données.<br/>
    Pour que l'ajout soit validé, l'utilisateur doit obligatoirement ajouter un mot en français suivi de sa traduction en anglais.</p>
    <p>La programmation de cette fonctionnalité d'ajout de mot est réalisée en Ajax à l'aide de la librairie JQuery.</p>

    <h4>Fonctionnement :</h4>
    <ul class="liste">
        <li>L'utilisateur saisit les deux mots qu'il veut ajouter puis valide.<br/>
            Un test est effectué en JavaScript afin de vérifier que les champs ont bien été renseignés.<br/>
            On récupère les valeurs grâce au DOM (document.getElementById("fr").value).</li>
        <li>Ensuite une requête Ajax est envoyée au serveur, via un proxy, pour que l'appel soit possible sur une autre URL.<br/>
            On envoie comme données les paramètres mot et word.</li>
        <li>Au niveau du proxy les paramètres son ajoutés à l'url qui permet l'ajout en base<br/>
            (http://webu2.upmf-grenoble.fr/shs/jb/hangman/db.php?word=test&mot=test).</li>
        <li>La requête Ajax ayant retourné un résultat (0 ou 1), on traite le résultat de l'appel xmlHTTP<br/>
            Puis on l'analyse grâce à une fonction JavaScript qui affiche "OK" lorsque que l'ajout s'est réalisé avec succès et "KO" dans le cas contraire.<br/>
            Pour finir, l'utilisateur est informé que l'ajout c'est réalisé avec succès.<br/><br/>
        </li>
    </ul>
</div>
