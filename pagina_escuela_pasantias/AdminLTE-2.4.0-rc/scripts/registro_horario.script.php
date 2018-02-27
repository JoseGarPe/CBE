<?php 
session_start();

require_once "../clases/horario.class.php";

$codigo = $_POST['codH'];
$dia = $_POST['codD'];
$mat = $_POST['estado'];
$gr = $_POST['grado'];
$area = $_SESSION['area'];


   //Instancia del objeto
    $mishorarios = new mihorario();

    //Envio los datos al método    
    $verificar = $mishorarios->agregarHorario($codigo,$dia,$mat,$gr,$area);




?>