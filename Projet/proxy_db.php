<?php

$urlServer='http://webu2.upmf-grenoble.fr/shs/jb/hangman/db.php';

$act = "?";


if(isset($_GET['word'])){
	$word = @$_GET['word'];
	$urlServer.=$act."word=".$word;
	$act = "&";
}
if(isset($_GET['mot'])){
	$mot = @$_GET['mot'];
	$urlServer.=$act."mot=".$mot;
	$act = "&";
}


$handle = fopen($urlServer, "r");

if (!$handle)
{
	print "erreur<hr>";
	exit;
}
else
{
	fpassthru($handle);
}
?>

