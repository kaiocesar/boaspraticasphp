<?php 


	require_once 'class1.php';
	require_once 'class2.php';


	$c1 = new class1();

	$c2 = new ClasseProjeto2\class1();


	echo $c1->show() ." - ". $c2->show();