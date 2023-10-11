<?php

require_once "conexion.php";

class ModeloUsuarios {
	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/
    public static function mdlMostrarUsuarios($tabla, $item, $valor) { // se establece la metodo public static

        $conexion = new Conexion(); // se crea la conexion al instante

        $stmt = $conexion->conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt-> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt-> execute();

        return $stmt->fetch();
    }



}