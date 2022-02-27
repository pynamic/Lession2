<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" Type="text/css" media="all">
        <style>
table {
  border: 2px solid black;
  border-collapse: collapse;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}
th,td{
    border: 2px solid black;
  border-collapse: collapse;
}
.imgproduct{
    height: 104px;
    width: 140px;
    margin: auto;
    display: block;
}
.icon{
    height: 30px;
    width: 40px;
margin: auto;
}
#right{  
 text-align: right;
</style>
    </head>
    <body>
        <form  method="POST" action="./view/viewadd.php">
            <input type="hidden" name="add" value="<?php echo $row["id"]; ?>"/>
            <input class="icon" type="image" name="btn_edit" src='./images/plus.png'></input></form>
            <div id="right"><image src='./images/lampart.jpg' style="height: 50px;
    width: 50px;margin-right: 50px;"/></div>
        <?php
        require $_SERVER['DOCUMENT_ROOT']. '/Lession2/controller/home.php';
        $db=new controller_home();
        echo "<table border='1'>";
        $getall=$db->get();
        while ($property = mysqli_fetch_field($getall)) {
        echo "<th>" . $property->name . "</th>";}
        echo "<th> Operations </th>";
        if ($getall->num_rows > 0) {
            
        // output data of each row
        while($row =mysqli_fetch_assoc($getall)) {
            echo "<tr>";
            echo "<td>" . $row["id"]."</td>";
            echo "<td>" . $row["name"]."</td>";
            echo "<td>" . $row["category"]."</td>";
            $imgurl="./images/".$row["image"];
            echo "<td><img class='imgproduct' src=$imgurl></img></td>";
            //echo "<td>" . $imgurl."</td>";
            /*
            echo "<td><input class='icon' type='image' name='btn_edit' value=".$row["id"]." src='./images/editing.png' onclick='window.open('./controller/edit.php')'></input>";
            echo "<input class='icon' type='image' name='btn_del' value=".$row["id"]." src='./images/delete.png'></input>";
            echo "<input class='icon' type='image' name='btn_copy' value=".$row["id"]." src='./images/copy.png'></input></td>";
            echo "</tr>";
             * <form  method="GET" action="./controller/edit.php"><input class="icon" type="image" name="btn_edit" value="<?php echo $row["id"]; ?>" src='./images/editing.png'></input></form>
            */
            ?>
    <td>
        
        <form  method="POST" action="./view/viewedit.php">
            <input type="hidden" name="edit" value="<?php echo $row["id"]; ?>"/>
            <input class="icon" type="image" name="btn_edit" src='./images/editing.png'></input></form>
        <form  method="POST" action="./controller/delete.php">
            <input type="hidden" name="delete" value="<?php echo $row["id"]; ?>"/>
            <input class="icon" type="image" name="btn_delete" src='./images/delete.png'></input></form>
            
        <form  method="POST" action="./controller/copy.php">
            <input type="hidden" name="copy" value="<?php echo $row["id"]; ?>"/>
            <input class="icon" type="image" name="btn_copy" src='./images/copy.png'></input></form>        
        
    </td>
            </tr>
            <?php
                }
            } else {
            echo "0 results";}
            echo "</table>";
            
        ?>
    </body>
</html>