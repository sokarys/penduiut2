<div id="menu">
    <ul>
        <?php # Mise en place du menu par un parcours de la table associative
            $menu['Accueil']="index.php";
            $menu['Le jeu']="jeu.html";
            $menu['Personnaliser']="";
            $menu['Documentation']="";

            foreach ($menu as $item => $act) {
                    print "<li><a href=\"$act\">$item</a></li>\n";
            }
        ?>
    </ul>
</div>