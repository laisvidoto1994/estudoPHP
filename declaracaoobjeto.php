<?php
/*
 * Declaração de Classe em PHP
 */
class Computador
{
	var $cpu;
	function ligar()
	{
		echo "Ligando computador a {$this->cpu}...";
	}
}
/*
 * Instanciando objeto da Classe em PHP
 */
$obj = new Computador;
$obj -> cpu = "500Mhz";
$obj -> ligar();

?>