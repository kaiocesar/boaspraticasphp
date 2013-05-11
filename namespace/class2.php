<?php 
/**
 * Class 1
 *	@author Kaio Cesar
 *	@todo Este arquivo possui uma classe com o mesmo nome que a do arquivo class1.php
 *	porém, estão em escopos diferentes. além disso existem metodos com mesmo nome, o que
 *	não foge do escopo, pois estamos utilizando namespace para separar essa ambugidade
 *	e evitar conflitos.
 */

namespace ClasseProjeto2;

class class1 {
	public function show() {
		echo "<h2>Sou class1, metodo show() do arquivo class2.php</h2>";
	}
}