<?php
require_once 'classes/respuestas.class.php';
require_once 'classes/Nna.php';

$_respuestas = new respuestas;
$_nna = new Nna;

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $data = $_nna->get($id);
        header("Content-Type: application/json");
        echo json_encode($data);
        http_response_code(200);
    } else {
        $data = $_nna->getAll();
        header("Content-Type: application/json");
        echo json_encode($data);
        http_response_code(200);
    }

} else {
    header('Content-Type: application/json');
    $datosArray = $_respuestas->error_405();
    echo json_encode($datosArray);
}