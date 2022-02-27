<?php
require $_SERVER['DOCUMENT_ROOT']. '/Lession2/model/product.php';
class controller_home{
    public $cc;
            function get(){
                $this->cc=new product();
        return $this->cc->getall();
}
function getcat(){
    $this->cc=new product();
    return $this->cc->getcat();
}
function getbyid($id){
    $this->cc=new product();
    return $this->cc->getbyid($id);
}
    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

