
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/formStyles.css">
    <script src="js/myScript.js"></script>
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
    <li class="menu"><a href="#">Contact</a></li>
    <li class="menu"><a href="https://courseweb.sliit.lk/">About Us</a></li>
</ul>
<br>
<center>
    <fieldset><legend><h2>Personal Details</h2></legend>
    <?php
        echo "Name: ".$_POST["firstname"]."&nbsp".$_POST["lastname"]."<br/>";
        echo "Gender: ".$_POST["gender"]."<br/>";
        echo "Mobile: ".$_POST["mobile"]."<br/>";
        echo "Email: ".$_POST["email"]."<br/>";
        echo "Address: ".$_POST["address"]."<br/>";
        echo "DoB: ".$_POST["day"]."<br/>";

    ?>
    </fieldset>

</center>
<br>
<hr id="test"/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Kavindi Batheegama</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>

