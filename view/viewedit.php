<?php

require $_SERVER['DOCUMENT_ROOT']. '/Lession2/controller/home.php';
$e_id =$_POST['edit'];
$dba=new controller_home();
$getcat=$dba->getcat();
$getbyid=$dba->getbyid($e_id);
$view= mysqli_fetch_array($getbyid);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form method="POST" action="../controller/edit.php" enctype="multipart/form-data">
            <label>ID: <?php echo $view["id"] ?></label>
            <input type="hidden"  name="id" value="<?php echo $e_id;?>"/></br>
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $view["name"] ?>"/> </br>
            <label>Category</label>
            <input type="text" name="category" id="e_category" value="<?php echo $view["category"] ?>" list="category" />
            <datalist id="category">               
              <?php
              
              while($row =mysqli_fetch_assoc($getcat)) {
              echo "<option value='".$row["category"]. "'/>";}?>
            </datalist></br>
            <label>Image</label>
            <input type="file" name="editfile" accept="image/png, image/gif, image/jpeg" /></br>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>