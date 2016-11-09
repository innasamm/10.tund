<?php
	require ("/home/innasamm/config.php");
	/* ALUSTAN SESSIOONI */
	session_start();

	/* ÜHENDUS */
	$database = "if16_innasamm";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

	/* KLASSID */

	//require("../class/Helper.class.php");
	//$Helper = new Helper();





?>
