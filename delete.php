<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, x-Requested-With");
header("Content-Type: application/json; charset=utf-8");


include "conection.php";

$postjson = json_decode(file_get_contents('php://input'), true);
echo json_encode($postjson);


if($postjson['add'] == 'delete_contact'){
    $query = mysqli_query($mysqli, "DELETE FROM contato WHERE id = '$postjson[id]'
    ");

    if($query) $result = json_encode(array('success'=>true ));
    else $result = json_encode(array('success'=>false));
    echo $result;
} 

?>