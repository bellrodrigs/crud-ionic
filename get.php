<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, x-Requested-With");
header("Content-Type: application/json; charset=utf-8");


include "conection.php";

$postjson = json_decode(file_get_contents('php://input'), true);


if($postjson['load'] == 'get_contact'){
    $data = array();
    $query = mysqli_query($mysqli, "SELECT * FROM contato ORDER BY nome");

    while($row = mysqli_fetch_array($query)){
        $data[] = array(
            'id'      => $row['id'],
            'nome'      => $row['nome'],
            'telefone'  => $row['telefone'],
            'telefone2' => $row['telefone2'],
            'celular'   => $row['celular'],
            'email'     => $row['email'],
            'endereco'  => $row['endereco']
        );
    }

    if($query) $result = json_encode(array('success'=>true, 'result' => $data));
    else $result = json_encode(array('success'=>false));
    echo $result;
} 

?>