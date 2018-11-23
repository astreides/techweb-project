<?php
//TODO start session
session_start();

//DONE include database.php file 

	//DONE assign database connexion into $database variable

	include("datab.php");

//TODO include checkUser.php file


	//TODO (in the next step) control user access

//DONE(in part) get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable
	if( isset($_GET["page"]) ){
	$page=($_GET["page"]);}
	if(isset($_POST["page"])){
	$page=($_POST["page"]);}
	if(!isset($page)){
		$page="test1";
	}
//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)

	 if(file_exists("action/".$page.".php")){
		include("action/".$page.".php");
	 }

	//create one php file for each action to manage on the website

	//TODO use 
	//             input params (included in $_GET or $_POST)
	//             $database variable (initialized in $database.php) 
	// to insert or update data into database

// DONE insert the start html envelope (<html><head>....</head><body> 
		?><html><head>
		
		<meta charset="iso-8859-1" />
		</head><?php include("Header.php")?><body><?php 
// TODO using $page decide to include header.php

	//DONE add header display
		
			

//DONE if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)
	if(file_exists('view/'.$page.'.php')){
		include('view/'.$page.'.php');}
	else{
			include('view/main.php');}
	
			

	//create one php file for each view to manage on the website (don't forget to create on main.php view)

	//TODO use 
	//             input params (included in $_GET or $_POST)
	//             $database variable (initialized in $database.php) 
	// to get data from database (if needed)

	// add view display possibly using data from database

// DONE insert the end html envelope (</body></html>)?>
	</body></html> 