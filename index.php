<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, x-Requested-With");
header("Content-Type: application/json; charset=utf-8");


include "conection.php";

$postjson = json_decode(file_get_contents('php://input'), true);
echo json_encode($postjson);


if($postjson['add'] == 'add_contact'){
    $data = array();
    $idadd = mysqli_insert_id($mysqli);
    $query = mysqli_query($mysqli, "INSERT INTO contato SET 
    nome        = '$postjson[nome]',
    telefone    = '$postjson[telefone]',
    telefone2   = '$postjson[telefone2]',
    celular     = '$postjson[celular]',
    email       = '$postjson[email]',
    endereco    = '$postjson[endereco]'
    ");

    if($query) $result = json_encode(array('success'=>true, 'idadd'=>$idadd ));
    else $result = json_encode(array('success'=>false));
    echo $result;
} 

?>