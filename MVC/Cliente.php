<?php
class Cliente {

    public static function getId($id) {
        echo "Ejecutaste Cliente::getId({$id})";
    }

    public static function getMany($idIni, $idFin) {
        echo "Ejecutaste Cliente::getMany({$idIni}, {$idFin})";
    }

    public static function getAll() {
        echo "Ejecutaste Cliente::getAll()";
    }

    public static function post($data) {
        echo "Ejecutaste Cliente::post() con datos: ";
        print_r($data);
    }

    public static function put($data) {
        echo "Ejecutaste Cliente::put() con datos: ";
        print_r($data);
    }

    public static function delete($id) {
        echo "Ejecutaste Cliente::delete({$id})";
    }
}
?>
