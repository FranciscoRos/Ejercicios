<?php
class Producto {

    public static function getId($id) {
        echo "Ejecutaste Producto::getId({$id})";
    }

    public static function getMany($idIni, $idFin) {
        echo "Ejecutaste Producto::getMany({$idIni}, {$idFin})";
    }

    public static function getAll() {
        echo "Ejecutaste Producto::getAll()";
    }

    public static function post($data) {
        echo "Ejecutaste Producto::post() con datos: ";
        print_r($data);
    }

    public static function put($data) {
        echo "Ejecutaste Producto::put() con datos: ";
        print_r($data);
    }

    public static function delete($id) {
        echo "Ejecutaste Producto::delete({$id})";
    }
}
?>
