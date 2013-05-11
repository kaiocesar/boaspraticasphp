<?php
/*
* Singleton
* @author Kaio Cesar	 
* @todo singleton, tem como proposito utilizar apenas uma instancia a objeto
* @link http://php.net/manual/pt_BR/language.oop5.patterns.php
*
*/

namespace pattern;

abstract class singleton {

	/**
	* @var object $_instance
	* @todo Instancia unica de nossa classe
	*/
	protected static $_instance;
	
	/**	
	* @todo acesso restrito ao construtor, para trabalharmos o pattern Singleton.
	*/
	final private function __construct() {
	   if (isset(static::$_instance))	
		throw new Exception("Essa clase possui uma instancia". get_called_class());
	   // faz-se a chamada, por exemplo, de configurações entre outras pelo metodo init()
	   static::init();	
	}

	/**
	* @todo O metodo que cria nossa "instancia unica" utilizando simples pattern Singleton.
	*/	
	public static function getInstance () {
	   if (null === static::$_instance) {	
		static::$_instance = new static;
	   } 
 	   return static::$_instance; 		
	}
	
	/**
	* @todo Metodo de inicialização de nossa objeto
	*/
	protected function init() {}

	
	/**
	* @todo Não permitir a clonagem do objeto, nem que as classes herdeiras possam sobrescrever esse metodo 
	*/
	final private function __clone() {
	 // trigger_error('Clonagem nao permitida', E_USER_ERROR);	
  	    throw new Exception("Clonagem nao permitida");
	}

}

