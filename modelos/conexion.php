<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pos_2",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}