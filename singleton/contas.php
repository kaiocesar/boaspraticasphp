<?php
/**
*  Classe Conta
*  @author Kaio Cesar <tecnico.kaio@gmail.com>
*  @todo Pequeno exemplo do uso do pattern Singleton em PHP
*/

require_once 'singleton.php';

class conta extends pattern\Singleton {
	protected function init() {
	   echo " initializing initial parameters by the method <b>init()</b> class <b>conta</b>...";	
	}
}
