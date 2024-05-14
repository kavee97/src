<?php
    include_once'config.php';
	
?>
<?php
    $Item_id = $_GET['id'];
    $Item_name =$_GET['name'];
    //$Item_description= $_GET['des'];
    $Price=$_GET['price'];
    $Quantity = $_GET['qty'];
    $Item_Code=$_GET['code'];
    
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
    <li class="menu"><a href="index.html">Home</a></li>
    <li class="menu"><a href="news.html">News</a></li>
    <li class="menu"><a href="register.html">Contact</a></li>
    <li class="menu"><a href="About.php">About Us</a></li>
</ul>
<br>
<center>
   <div class="productData tbl" style="border-style:groove;border-color:Darkblue;">
    <form action="submitUpdateItems.php" method="GET">
    <table border="0" width="25%">
    <tr>
        <td>Item ID</td>
        <td><input type="text" value="<?php echo "$Item_id"?>"name="id" readonly></td>
    </tr>
    <tr>
        <td>Item Name</td>
        <td><input type="text" value="<?php echo "$Item_name"?>"name="name" ></td>
    </tr>
    <!--<tr>
        <td>Item Description</td>
       <td><textarea value="<?php echo "$Item_description"?>" name="des" ></textarea></td>
    </tr>-->
    <tr>
        <td>Price</td>
        <td><input type="text" value="<?php echo "$Price"?>" name="price" ></td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td><input type="text" value="<?php echo "$Quantity"?>" name="qty" ></td>
    </tr>
    <tr>
        <td>Item Code</td>
        <td><input type="text" value="<?php echo "$Item_Code"?>" name="code" ></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Update" name="submit"></td>
    </tr>
    </table>
    </form>
</center>
<hr id="test"/>

<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Kavindi Batheegama</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>


