<div id="conteneurMenu">
    <div id="menu">
        <ul>
            <?php # Mise en place du menu par un parcours de la table associative
                $menu['Accueil']="index.php";
                $menu['Le Jeu']="game.php";
                $menu['Les Règles']="rules.php";
                $menu['Personnaliser']="perso.php";
                $menu['Documentation']="doc.php";
                $menu['Credits']="credits.php";
                

                foreach ($menu as $item => $act) {
                        print "<li><a href=\"$act\">$item</a></li>\n";
                }
            ?>
        </ul>
    </div>
</div>