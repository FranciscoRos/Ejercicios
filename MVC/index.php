<?php
include_once('Producto.php');
include_once('Cliente.php');
$recursos_validos = array('producto','cliente');

// Obtener la ruta 
$path_info = $_GET['PATH_INFO'] ?? '';
$parameters = explode('/', trim($path_info, '/')); 
$recurso = $parameters[0] ?? '';
$params = array_slice($parameters, 1);

// Validar recurso
if (!in_array($recurso, $recursos_validos)) {
    http_response_code(404);
    echo "Recurso no válido";
    exit;
}

// Detectar método HTTP
$metodo = strtolower($_SERVER['REQUEST_METHOD']);
$clase = ucfirst($recurso); // producto es Producto

// Procesar según método 
switch ($metodo) {
    case 'get':
        if (count($params) == 0) {
            $clase::getAll();
        } elseif (count($params) == 1) {
            $clase::getId($params[0]);
        } elseif (count($params) == 2) {
            $clase::getMany($params[0], $params[1]);
        } else {
            http_response_code(400);
            echo "Demasiados parámetros para GET";
        }
        break;

    case 'post':
        $data = json_decode(file_get_contents('php://input'), true);
        $clase::post($data);
        break;

    case 'put':
        $data = json_decode(file_get_contents('php://input'), true);
        $clase::put($data);
        break;

    case 'delete':
        if (count($params) == 1) {
            $clase::delete($params[0]);
        } else {
            http_response_code(400);
            echo "DELETE requiere un ID";
        }
        break;

    default:
        http_response_code(405);
        echo "Método HTTP no permitido";
}
?>
