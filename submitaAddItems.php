<?php
    include_once'config.php';
?>
<?php

    $name=$_POST["field1"];
    $code=$_POST["field2"];
    $price=$_POST["field3"];
    $qty=$_POST["field4"];
    $des=$_POST["field5"];

    $sql="INSERT INTO item(Item_id,Item_name,Item_description,Price,Quantity,Item_Code)VALUES('','$name','$des','$price','$qty','$code')";

    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Record Inserted Successfully!!')</script>";
        header("Location:index.php");
    }else{
        echo"<script>alert('Error in Insertion!!')</script>";
    }

    //close the conection
    mysqli_close($conn);



?>
