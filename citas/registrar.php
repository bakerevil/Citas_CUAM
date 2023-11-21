<?php

$nombrePPS = isset($_POST['txt_nombrePPS']) ? $_POST['txt_nombrePPS'] : '';
$nombreALM = isset($_POST['txt_nombreALM']) ? $_POST['txt_nombreALM'] : '';
$grado = isset($_POST['txt_grado']) ? $_POST['txt_grado'] : '';
$caso = isset($_POST['txt_caso']) ? $_POST['txt_caso'] : '';
$modalidad = isset($_POST['txt_modalidad']) ? $_POST['txt_modalidad'] : '';
$hora = isset($_POST['txt_hora']) ? $_POST['txt_hora'] : '';
$dia = isset($_POST['txt_dia']) ? $_POST['txt_dia'] : '';
$asunto = isset($_POST['txt_asunto']) ? $_POST['txt_asunto'] : '';


try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=cuam", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO cita ( nombrePPS, nombreALM, grado, caso, modalidad, hora, dia, asunto) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
   
    $pdo->bindParam(1, $nombrePPS);
    $pdo->bindParam(2, $nombreALM);
    $pdo->bindParam(3, $grado);
    $pdo->bindParam(4, $caso);
    $pdo->bindParam(5, $modalidad);
    $pdo->bindParam(6, $hora);
    $pdo->bindParam(7, $dia);
    $pdo->bindParam(8, $asunto);
   
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}