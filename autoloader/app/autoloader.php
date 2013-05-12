<?php
/**
* Autoloader
* @author Kaio Cesar <tecnico.kaio@gmail.com>
* @todo exemplo de autoloader 
*/


class Autoloader {
	
	private static $_instance;

	protected static $_dir;

	private function __construct() {
		if (isset(static::$_instance))
		throw new Exception('nothing permission');

		static::init();
	}

	protected static function init() {
		self::$_dir = dirname(__DIR__)  . DIRECTORY_SEPARATOR;
	}

	public static function getInstance() {
		if (null === static::$_instance)
			static::$_instance = new static;

		return static::$_instance;

	}

	public function setDir($dir=null){
		self::$_dir = $dir;
	}

	public static function register() {
		spl_autoload_register(function($class) {
			$file =  str_replace('_', DIRECTORY_SEPARATOR, $class). '.php';
			$_dir_fw = self::$_dir . '/framework/';	

			$arr_c = substr_count($file, '\\');
			$arr_f = explode("\\",$file);
			$file = $arr_f[$arr_c];

			// arquivos normais   
			if (file_exists(self::$_dir . $file))  
				return require self::$_dir . $file;

			// Arquivos da pasta Framework
			if (file_exists($_dir_fw . $file))   
				return require $_dir_fw . $file;   


			$prefix = include 'configs/prefix_autoloader.php';
			$exp = explode("/", $file);

			// procurar por prefixo de autoloader
			 $ff = (array_key_exists($exp[0],$prefix)) ? $prefix[$exp[0]] : null;

			if (file_exists(self::$_dir.$ff.$exp[1]))
				return require self::$_dir.$ff.$exp[1];

		});
	}


	public static function register2() {
		// verifico oque me trousseram(retiro o namespace)
		// verifico o arquivo pela substituição do underscores
		// verifico a existencia pelo parquiv unico		
		spl_autoload_register(function($class) {
			// limpamos o que veio
			$file =  str_replace('_', DIRECTORY_SEPARATOR, $class). '.php';
			
			// dividimos o namespace do nome da classe
			$count_backslashes = substr_count($file, '\\'); // isso indica que há namespace
			$arr_f = explode("\\",$file);
			$file = $arr_f[$count_backslashes];

			var_dump($arr_f);



		});

	}




}


