<div id="doc">
    <h2>Documentation du jeu</h2>
    <p>Le jeu utilise deux librairies javascript pour fonctionner :</p>
    <ul class="liste">
        <li>jquery-1.4.2.min.js</li>
        <li>jquery-ui-1.8.6.custom.min.js</li>
    </ul>
    <p>jquery-1.4.2.min.js permet de faire les différentes interactions quand on clique sur les boutons, envoyer des requetes.<br/>
    De son côté jquery-ui-1.8.6.custom.min.js permet de mettre un style aux différents objets de la page html.</p>

    <h4>Le fonctionnement du jeu :</h4>
    <p>Il est séparé en deux : une page game.php, pour l'interface graphique et pendu.js qui permet de définir des fonctions pour que la jeu prenne vie.<br/>
    Dans game.php, nous pouvons retrouver plusieurs div :</p>
    <ul class="liste">
        <li>result permet de mettre le résultat de la partie (gagné ou perdu) ainsi que d'afficher le nombre de "vies" qu'il reste au joueur./li>
        <li>réponse stocke la réponse du serveur pour la traiter par la suite.</li>
        <li>motfr contient le mot fr.</li>
        <li>moten contient le mot en anglais</li>
        <li>pendu contient les images correspondants au pendu ainsi que le bouton "nouvelle partie".</li>
        <li>keybord corespond aux touches du clavier.</li>
    </ul>

    <h4>Les fonctionnalités contenues dans pendu.js :</h4>
    <ul class="liste">
        <li>On dispose d'une variable globale (erreur) permettant de compter le nombre de coups joués.</li>
        <li>newgame() permet de lancer une nouvelle partie, en réinitialisant les touches déja appuyées.</li>
        <li>updateSytle() permet d'appliquer un style aux lettres et au keybord.</li>
        <li>reponse() permet de traiter la réponse du serveur.</li>
        <li>win() et loose() permettent d'afficher au joueur si il a perdu ou gagné.</li>
        <li>openResult() affiche la solution au joueur si celui-ci à perdu.</li>
        <li>requete() permet d'envoyer la lettre au serveur. En cas de succès, il traite la réponse via la fonction reponse().</li>
    </ul>

    <p>Grâce à l'utilisation de Jquery, il a été possible de développer un jeu de pendu très simplement et en peu de temps : <strong>"The Write less, Do more, JavaScript Library"</strong><p>
</div>