<?php
    include_once'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<img class="logo" src="images/cart.png" width="200" height="200" alt="Shopping Cart Image">
<center>
    <h1>Shopping Cart</h1>
    <h3 id="header">The Online Shopping Store</h3>
<hr id="test"/>
</center>
<ul class="menu">
    <li class="menu"><a href="#">Home</a></li>
    <li class="menu"><a href="news.html">News</a></li>
    <li class="menu"><a href="register.html">Contact</a></li>
    <li class="menu"><a href="About.php">About Us</a></li>
</ul>


<br>
<button> <a href="addItems.html">Add New Item</a> </button>
<br>
<center>
 


<div class="productData tbl" style="border-style: groove; border-color: DarkBlue">
    <table border="1" width="100%">
    <tr>
        <th class="col1">Item ID</th>
        <th class="col1">Item Name</th>
        <th class="col1">Description</th>
        <th class="col1">Price</th>
        <th class="col1">Quantity</th>
        <th class="col1">Item Code</th>
        <th class="col1">Edit</th>
        <th class="col1">Delete</th>
    </tr>
    <?php
        $sql="select * from item";
        $result=$conn->query($sql);

        if($result->num_rows>0){ 
            while($row=$result->fetch_assoc()){
                echo"<tr><td>".$row["Item_id"]."</td><td>".$row["Item_name"]."</td><td>".$row["Item_description"]."</td><td>".$row["Price"]."</td><td>".$row["Quantity"]."</td><td>".$row["Item_Code"]."</td>";
                
                echo "<td><a href='editRecord.php? id=$row[Item_id] &name=$row[Item_name] &price=$row[Price] &qty=$row[Quantity] &code=$row[Item_Code]'>edit</a></td>";
                
                echo "<td><a href='deleteItems.php ? id=$row[Item_id]'>delete</a></td></tr>";
                
            }
        }else{
            echo "Empty Rows";
        }
    
    echo"</table>";

    
    mysqli_close($conn);
 //? id=$row[Item_id] &name=$row[Item_name] &des=$row[Item_description] &price=$row[Price] &qty=$[Quantity] &code=$row[Item_Code]


    ?>
   
    
</div>
</center>
<hr id="test"/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Kavindi Batheegama</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>

