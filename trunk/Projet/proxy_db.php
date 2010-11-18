<?php

$urlServer='http://webu2.upmf-grenoble.fr/shs/jb/hangman/db.php';

$act = "?";

if(isset($_GET['session'])){
	$session = $_GET['session'];
	$urlServer.=$act."session=".$session;
	$act = "&";
}
if(isset($_GET['action'])){
	$action = $_GET['action'];
	$urlServer.=$act."action=".$action;
	$act = "&";
}

if(isset($_GET['lettre'])){
	$lettre = $_GET['lettre'];
	$urlServer.=$act."lettre=".$lettre;
	$act = "&";
}

if(isset($_GET['cheat'])){
	$cheat = $_GET['cheat'];
	$urlServer.=$act."cheat=".$cheat;
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

