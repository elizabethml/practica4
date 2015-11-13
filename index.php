<?php

	require('lib/page.php');
	require('lib/header.php');
	require('lib/menu.php');
	require('lib/contents.php');
	require('lib/foot.php');


	define('LAYOUT', 
		'<DOCTYPE html>
		<html>
		<head>
			<style type="text/css">');
		
	$css=file_get_contents('css/css.css');

	
	$links=array(
		'Home'=>'/',
		'Nosaltres'=>'');

	define ('LOGO','img/images.png');


	$pagina1 = new page('Page de prova',LOGO,$css,$links,'Este es el contenido del article','Este es el footer');
	//print_r($pagina1);
	$pagina1->show();
