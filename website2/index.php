<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    username: <br>
    <input type="text" name="username"> <br><br>
    password: <br>
    <input type="password" name="password">
    <input type="submit" value="login" name="login">
</form>
</body>
</html>


<?php 
    if(isset($_POST["login"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            echo "<br>".$_SESSION["username"];
            echo "<br>".$_SESSION["password"];

            header("Location: home.php");
        }
        else{
            echo "Missing username/password <br>";
        }
    }
?>