<?php
require $_SERVER['DOCUMENT_ROOT']. '/Lession2/model/product.php';

$statusMsg = '';

// File upload path
$targetDir = "C:/xampp/htdocs/Lession2/images/";
$fileName = basename($_FILES["addfile"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

//$e_id=$_POST["a_id"];
$e_name=$_POST["a_name"];
$e_category=$_POST["a_category"];
$dbb=new product();

if(isset($_POST["submit"]) && !empty($_FILES["addfile"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["addfile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $dbb->add($e_name, $e_category, $fileName);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

