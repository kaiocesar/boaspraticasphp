<?php
/**
* Vamos trabalhar, Singleton em ação
* @author Kaio Cesar <tecnico.kaio@gmail.com>
* @todo pequeno exemplo do uso do pattern "singleton"
* @link http://php.net/manual/pt_BR/language.oop5.patterns.php
* @link http://programadorfreelaphp.com.br/
*/

 include('contas.php');

// criamos o objeto
 $objeto = conta::getInstance();



// tentamos clonar nosso objeto recém criado. FATAL ERROR
//$objClone = clone $objeto;
