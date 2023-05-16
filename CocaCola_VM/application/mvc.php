<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI);

	if ($pageURI == 'ColaCan')
		new Controller($pageURI);

	if ($pageURI == 'ColaBottle')
		new Controller($pageURI);
	
	if ($pageURI == 'Sprite')
		new Controller($pageURI);

	if ($pageURI == 'Fanta')
		new Controller($pageURI);
?>