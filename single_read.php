<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$debug = null;
include_once './config/config.php';
include_once './class/employees.php';

if ($debug) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
$database = new Database();
$db = $database->getConnection();
$item = new Employee($db);
$item->id = isset($_GET['id']) ? $_GET['id'] : die();

$item->getSingleEmployee();
if($item->name != null){
    // create array
    $emp_arr = array(
        "id" =>  $item->id,
        "name" => $item->name,
        "email" => $item->email,
        "age" => $item->age,
        "designation" => $item->designation,
        "created" => $item->created
    );

    http_response_code(200);
    echo json_encode($emp_arr);
}

else{
    http_response_code(404);
    echo json_encode("Employee not found.");
}
