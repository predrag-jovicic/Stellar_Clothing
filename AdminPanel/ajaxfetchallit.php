<?php
include "../logic/connection.php";
header("Content-type:application/json");
if(isset($_POST['btn'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM products_sizes_colors WHERE productitem_id = :id";
    $prepared = $connection->prepare($query);
    $prepared->bindParam(":id",$id);
    $prepared->execute();
    $resultquery = $prepared->fetchAll();
    echo json_encode(['userdata'=>$resultquery]);
}