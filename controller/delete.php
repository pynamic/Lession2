<?php
require $_SERVER['DOCUMENT_ROOT']. '/Lession2/model/product.php';
$d_id=$_POST["delete"];
$del=new product();
if($del->delete($d_id)){
    echo "Deleted product: id".$d_id;
}
else{
    echo "Delete Fail!!!";
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

