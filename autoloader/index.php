<?php
/**
* @author Kaio Cesar <tecnico.kaio@gmail.com>
* @todo Existem diversas conveções sobre a utilização de autloader, principalmente em aplicações de auto 
* nível, como frameworks. Por isso uma conveção interessante a se seguir é:
* - Nomear arquivos e classes com mesmo nome, exemplo,
*	class Controller  =>  arquivo =  Controller.php		
*	class ModelLogs	  =>  arquivo =  ModelLogs.php
*	class auth_Auth   =>  arquivo =  auth/Auth.php
*
* um esquema de nomeclatura para classes e arquivos é utilizar um esquema de prefixo seguido de
* underscor e o nome do arquivo, e utilizar um arquivo de paths para carregar um array, por exemplo,
* com key = prefixo e value = path referente.
*
*
*/

	include 'app/autoloader.php';

	$autoloader = Autoloader::getInstance();
	$autoloader::register();


	$obj = new Pacote\Controller\tester\library_class1(); // arquivos comuns
	$obj->Show();

	$objController = new Controller(); // arquivos da framework
	$objController->Show();


	$objAuthAuth = new auth_Auth(); // subdiretorio dentro da /framework
	$objAuthAuth->Show();

	$objEnquete = new ENQUETE_Enquete();
	$objEnquete->Show();

