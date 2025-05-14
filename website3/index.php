<?php 
    include("database.php");

    // $username = "Joao Vitor";
    // $password = "Joao123";
    // $hash = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "INSERT INTO users(usernames, password) VALUES('{$username}', '{$hash}')";

    // try{
    //     mysqli_query($conn, $sql);
    //     echo "User is now Registered";
    // }catch(mysqli_sql_exception){
    //     echo "Could not register User";
    // }



    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>";
            echo $row["id"]."<br>";
            echo $row["usernames"]."<br>";
            echo $row["password"]."<br>";
            echo $row["reg_date"]."<br>";
        };
        
    }
    else{
        echo "No User Found";
    }

    mysqli_close($conn);
?>

