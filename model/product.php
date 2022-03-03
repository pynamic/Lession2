<?php

require $_SERVER['DOCUMENT_ROOT']. '/Lession2/dbconnection/dbconnection.php';
//global $c;
class product{
    public $id;
    public $name;
    public $category;
    public $image;
    
//procudure getall
function getall(){
    $conn=new db();
    $query="Call GetAllproducts()";
    $getall=mysqli_query($conn->open(), $query);
    return $getall;
}
//lat cat ra de chon
function getcat(){
    $conn=new db();
    $query="Call sp_getcat()";
    $getcat=mysqli_query($conn->open(), $query);
    return $getcat;
}
function getbyid($id)
{
    $conn=new db();
    $query="Call sp_getbyid($id)";
    $getbyid=mysqli_query($conn->open(), $query);
    return $getbyid;
}
function add($a_name,$a_category,$a_image){
    $conn=new db();
    $query="Call sp_add('" . $a_name . "','" . $a_category . "','" . $a_image . "')";
    $add=mysqli_query($conn->open(),$query);
    return $add;
}
function edit($e_id,$e_name,$e_category,$e_image){
    $conn=new db();
    $query="Call sp_edit('" . $e_id ."','" .$e_name."','" .$e_category . "','" . $e_image. "')";
    $delete= mysqli_query($conn->open(),$query);
    return $delete;
}

function delete($d_id){
    $conn=new db();
    $query="Call sp_delete($d_id)";
    $delete= mysqli_query($conn->open(),$query);
    $conn->close();
    return $delete;
}
//$getcolumn=mysqli_query($conn, 'Call GetColumn()');
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

