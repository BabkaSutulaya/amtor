<?php 
require "db.php"; 
session_start(); 
function saveAuth($id) 
{ 
 $dataBase = new Database(); 
 $sql = "SELECT * FROM `clients` WHERE ID_client = :id"; 
 $param = array( 
 "id" => $id 
 ); 
 foreach ($dataBase->select($sql, $param) as $item) { 
 $_SESSION["id"] = $item["ID_client"];
 }
}