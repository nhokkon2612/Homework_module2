<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Admin login</title>
</head>

<style>
    button{
        margin-left: 235px;
        margin-bottom: 10px;
    }
    div {
        border: 2px solid black;
        display: inline-block;
    }

    input {
        padding: 5px;
        margin: 8px;
    }
</style>
<body>
<form method="get">
    <div>
        <h2 style="text-align: center">Login</h2>
        <input type="text" name="username" size="30" placeholder="username"><br>
        <input type="password" name="password" size="30" placeholder="password"><br>
        <button type="submit" >login</button>
    </div>
    <?php
    $result="";
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $username = $_GET["username"];
        $password = $_GET["password"];
        if ($username === "admin" && $password === "admin") {
            header("Location: http://localhost/Homework/baiTap/welCome.php");
        } else if($username==="" || $password===""){
            $result="Please field your required";
            echo "<script type='text/javascript'>alert('$result');</script>";
        }
        else {
            $result="Login Error";
            echo "<script type='text/javascript'>alert('$result');</script>";
        }
    }
    ?>
</form>

</body>
</html>
