<?php

require $_SERVER['DOCUMENT_ROOT']. '/Lession2/controller/home.php';
$e_id =$_POST['add'];
$dba=new controller_home();
$getcat=$dba->getcat();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form method="POST" action="../controller/add.php" enctype="multipart/form-data">
            <label>ID:</label></br>
            <label>Name:</label>
            <input type="text" name="a_name" value=" "/> </br>
            <label>Category</label>
            <input type="text" name="a_category" id="e_category" list="category" />
            <datalist id="category">               
              <?php
              
              while($row =mysqli_fetch_assoc($getcat)) {
              echo "<option value='".$row["category"]. "'/>";}?>
            </datalist></br>
            <label>Image</label>
            <input type="file" name="addfile" accept="image/png, image/gif, image/jpeg" /></br>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>