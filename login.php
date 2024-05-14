<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["uname"];
        $password = $_POST["pwd"];
        
        if($username=="test"&&$password=="1234"){
            $_SESSION['logged_user']=$username;
            header("location:welcome.php");
        }else{
            echo "<script>alert('You have entered the incorrect Username or the Password')</script>";
        }
    }
?>
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
    <div class="form-style-6">
    <h1>Login</h1>
    <form method="POST" action="">
        <input type="text" id="uname" name="uname" placeholder="your Username"/>
        <input type="password" id="pwd" name="pwd" placeholder="Your password"/>
        <br/><br/>
        <input type="submit" value="Login"/><br/>
    </form>
    <div>
</center>
<br>
<hr id="test"/>
<center>
<h3 style="font-weight: bold; font-style: italic;">Created By :Kavindi Batheegama</h3>
    <a href="https://courseweb.sliit.lk/"> Visit this Course </a>
</center>
</body>
</html>

