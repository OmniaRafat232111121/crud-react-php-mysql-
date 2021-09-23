<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'dbconnection.php';

$allUsers=mysqli_query($db_conn,"SELECT* FROM `USERS` ");
if((mysqli_num_rows($allUsers))>0){
$allUsers=mysqli_fetch_all($allUsers,MYSQlI_ASSCO);
echo json_encode(["sucess"=>1,"users"=>$allUsers]);
}
else{
    json_encode(["sucess"=>0]);
}
?>