<div>
<p>
    La partie "personnalisation" permet &agrave; l'utilisateur d'ajouter<br/>
des mots dans la base de donn&eacute;es, pour que l'ajout soit valid&eacute;<br/>
l'utilisateur doit obligatoirement ajouter un mot en fran&ccedil;ais<br/>
suivi de sa traduction en anglais.
</p>
<p>
    La programmation de cette fonctionnalit&eacute; d'ajout de mot est r&eacute;alis&eacute;e en Ajax &agrave; l'aide<br/>
de la librairie JQuery.
</p>

<p>Fonctionnement:</p>

<ul>
    <li>L'utilisateur saisi les deux mots qu'il veut ajouter puis valide.<br/>
        Un test est effectu&eacute; en JavaScript afin de v&eacute;rifier que les champs<br/>
        ont bien &eacute;taient renseign&eacute;s. On r&eacute;cup&egrave;re les valeurs gr&acirc;ce au DOM<br/>
        (document.getElementById("fr").value)<br/><br/>
    </li>
    <li>Ensuite une requ&ecirc;te Ajax est envoy&eacute; au serveur, on passe par un proxy,<br/>
        pour que l'appel soit possible sur une autre URL<br/>
        On envoi comme donn&eacute;es les param&egrave;tres mot et word<br/><br/>
    </li>
    <li>Au niveau du proxy les param&egrave;tres son ajout&eacute; &agrave; l'url qui permet l'ajout en base<br/>
        (http://webu2.upmf-grenoble.fr/shs/jb/hangman/db.php?word=test&amp;mot=test)<br/><br/>
    </li>
    <li>
        La requ&ecirc;te Ajax ayant retourn&eacute; un r&eacute;sultat (0 ou 1), on traite le r&eacute;sultat<br/>
        de l'appel xmlHTTP est l'analysons gr&acirc;ce &agrave; une fonction JavaScript qui affiche<br/>
        "OK" lorsque que l'ajout c'est r&eacute;alis&eacute; avec succ&egrave;s et "KO" dans le cas contraire<br/>
        Pour finir, l'utilisateur est inform&eacute; que l'ajout c'est r&eacute;alis&eacute; avec succ&egrave;s.<br/><br/>
    </li>
</ul>


</div>