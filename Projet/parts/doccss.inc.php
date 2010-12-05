<div id="doc">
    <h2>Documentation du CSS et de la mise en page</h2>
    <ul class="liste">
        <li><a href="#orgaPages" title="Organisation générale des pages">Organisation générale des pages</a></li>
        <li><a href="#structure" title="Structure du site">Structure du site</a></li>
        <li><a href="#orgaFichiers" title="Organisation des fichiers">Organisation des fichiers</a></li>
        <li><a href="#xhtml" title="XHTML">XHTML</a></li>
        <li><a href="#css" title="CSS">CSS</a></li>
        <li><a href="#explication" title="Explication des choix">Explication des choix</a></li>
    </ul>
    <br/>
    <h4 id="orgaPages">1. Organisation générale des pages</h4>
    <p>Les pages du site sont des fichiers php mais ceux-ci ne servent qu'à le découper en morceaux affin de rendre les modifications plus faciles.<br/>
       Il n'y a donc pas de code "fonctionnel" php dans ce site.<br/>
       Chacune des page est stucturée de la façon suivante :</p>
    <ul class="listeIndentee">
        <li>un Header, correspondant à l'entête du site et qui contient le titre.</li>
        <li>un Menu, pour naviguer entre les différentes pages.</li>
        <li>un corps, qui est sert a afficher le contenu des pages.</li>
        <li>un footer, qui contient un lien de téléchargement linux pour les polices du site ainsi que des liens de validation du W3C.</li>
    </ul>
    <p>on notera que le nom des pages décrit rapidement le contenu</p>

    <h4 id="structure">2. Structure du site</h4>
    <ul class="liste">
        <li>Accueil</li>
        <li>Le Jeu</li>
        <li>Les Règles</li>
        <li>Personnaliser</li>
        <li>Documentation
            <ul class="liste">
                <li>Documentation du jeu</li>
                <li>Documentation du css</li>
                <li>Documentation de la personnalisation</li>
            </ul>
        </li>
        <li>Credits
            <ul class="liste">
                <li>Laurent</li>
                <li>Olivier</li>
                <li>Iman</li>
            </ul>
        </li>
    </ul>

    <h4 id="orgaFichiers">3. Organisation des fichiers</h4>
    <p>Les fichiers sont organisés dans plusieurs répertoires suivant leur type/fonction. Cette organisation répond au schéma suivant.</p>
    <ul class="liste">
        <li><strong>Racine</strong>
            <ul class="liste">
                <li><strong>lib</strong>
                    <ul class="liste">
                        <li><strong>js</strong> : contient les fichiers javascript</li>
                        <li><em>autres répertoires non détaillés</em></li>
                    </ul>
                </li>
                <li><strong>parts</strong> : contient les morceaux de pages</li>
                <li><strong>ressources</strong>
                    <ul class="liste">
                        <li><strong>css</strong> : contient les feuilles de style</li>
                        <li><strong>cv</strong> : contient les pages de cv de l'équipe au format html</li>
                        <li><strong>images</strong>
                            <ul class="liste">
                                <li><strong>cv</strong> : contient les images des cv de l'équipe</li>
                                <li><strong>interface</strong> : contient les images de l'inteface</li>
                                <li><strong>scenario</strong> : contient les images du jeu</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><em>pages du site</em></li>
            </ul>
        </li>
    </ul>

    <h4 id="xhtml">XHTML</h4>
    <p>Le code xhtml est clairement organisé et indenté correctement de façon à simplifier sa lecture.<br/>
    Celui-ci ne contient que les balises nécessaires à sa structure, la mise en forme étant faite dans les fichiers css.</p>
    <p>On notera que toutes les pages sont valides xhtml 1.1 à l'exception de la page doc.php.<br/>
       En effet, dans un soucis d'esthétique, cette page utilise un Map, et cette utilisation n'est pas considérée comme valide pour du xhtml 1.1.<br/>
       En revanche, cette page est valide xhtml 1.0.</p>

    <h4 id="css">CSS</h4>
    <p>On trouve 3 feuilles de style</p>
    <ul class="listeIndentee">
        <li>style.css : la feuille de style du site</li>
        <li>cv.css : la feuille de style des cv de l'équipe</li>
        <li>print.css : la feuille de style utilisée pour l'impression des 3 pages de documentation ainsi que des règles.</li>
    </ul>
    <p>Ces 3 feuilles de style sont valides CSS 2.1.<br/>
       Cependant le style actuel a ses limites. En effet, le style est correctement interprété par Firefox et Google Chrome (avec quelques petites différences), mais en ce qui concerne Internet Explorer le résutat n'est pas satisfaisant.<br/>
       Ceci est dû à de nombreuss attributs non reconnus, interprétés de façon différente par IE.
       Malheureusement, il faudrait pour bien faire, mettre en place une feuille de style dédiée a IE.</p>

    <h4 id="explication">Explication des choix</h4>
    <p>Tout d'abord, il a été décidé de ne pas surcharger les pages d'images, rendant la lecture trop saccadée et augmentant considérablement le temps de chargement.</p>
    <p>Le menu a été flacé fixe sur les pages dans le but de toujours y avoir accès peu importe l'endroit où on se trouve.</p>
    <p>Le footer est de son coté fixé non pas sur les pages, mais sur la fenêtre du navigateur.<br/>
       Il permet de télécharger la police "Comic sans ms", utilisée sur le site, pour les utilisateurs de linux. Cette n'étant pas présente de base sur Linux.<br/>
       Elle permet également d'accéder aux validateurs du W3C.</p>
    <p>Après de longues heures de réflexion, le thème de Coyote a été retenu pour ce jeu de pendu. Ainsi les couleurs du site correspondent à celles des images utilisée.<br/>
       Certaines images, comme celle du menu ou celle de la perconnalisation ont été utilisées comme background, mais en faisant attention à ne pas y supperposer de texte affin que celui-ci reste lisible.</p>
    <p>Le contenu des cv des membres de l'équipe est ouvert dans la page credits.php en utilisant un popup plutôt qu'il soit affiché directement dans la page. Ceci permet de pouvoir naviguer entre les pages tout en gardant un cv ouvert.<br/>
       Une autre solution possible aurait été d'afficher tous les cv sur une seule et même pas, mais ceci rendrait la page trop importante en terme de taille.<br/>
       De plus, avec ce type de solution, on aurait pris le risque de provoquer chez le lecteur un sentiment de lourdeur. Ainsi avec une popup, on captive mieux l'attention du lecteur.<br/>
       Cependant, le système choisit a pour inconvénient de rendre la page des crédits relativement peu remplie.</p>
    <p>De manière générale, le site a été conçu dans un soucis d'accessibilité et de respect du lecteur, tout en ne le privant pas du contenu ni des techniques de présentation utilisées.</p>
</div>
