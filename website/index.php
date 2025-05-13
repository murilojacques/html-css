<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <!--<p><b>Username: </b><input type="text" name="username"></p>-->
        
        <!--{
            <input type="radio" value="Visa" name="creditCard">Visa<br>
            <input type="radio" value="Mastercard" name="creditCard">Mastercard<br>
            <input type="radio" value="American Express" name="creditCard">American Express<br>
        }-->

        <!--{
            <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
            <input type="checkbox" name="foods[]" value="Hamburguer">Hamburguer<br>
            <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
            <input type="checkbox" name="foods[]" value="Taco">Taco<br>
        }-->
        
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
</body>
</html>

<?php
{
    // $radius = $_POST['radius'] ?? null;
    // $circ = null;
    // $area = null;
    // $vol = null;
    // //$total = abs($X);
    // //$total = round($X);
    // //$total = floor($X);
    // //$total = ceil($X);
    // //$total = pow($X, $Y);
    // //$total = sqrt($X);
    // //$total = max($X, $Y, $Z);
    // //$total = pi();
    // //$total = rand();
    // //$total = rand($X, $Y);
    // $circ = round(2 * $radius * pi(), 2);
    // $area = round(pi() * pow($radius, 2), 2);
    // $vol = round(4/3* pi() * pow($radius, 3), 2);
    // echo"<br>Circunferencia: {$circ}";
    // echo"<br>Area: {$area}";
    // echo"<br>Volume: {$vol}";
}

{
    // $counter = $_POST['counter']??0;
    // for($i = $counter; $i>=0; $i--){
    //     echo "<br>". $i;
    // }
}

{
    // $foods = array("apple", "orange", "banana", "coconut");

    // $foods[0] = "pineapple";
    // array_push($foods, "kiwi", "watermelon");
    // //array_shift($foods);
    // //$foods = array_reverse($foods);
    // //echo count($foods);

    // foreach($foods as $food){
    //     echo"{$food}<br>";
    // }

    // array_pop($foods);
    // echo"<br><br>";

    // foreach($foods as $food){
    //     echo"{$food}<br>";
    // }
}

{
    // $capitals = array("USA"=>"Washington D.C",
    //                 "Brazil"=>"Brasilia",
    //                 "Japan"=>"Kyoto",
    //                 "Canada"=>"Ottawa",
    //                 "Argentina"=>"Buenos Aires",
    //                 "India"=>"New Delhi");

    // $country = $_POST['country']??null;
    // $capital??null;
    // $capital = $capitals["{$_POST['country']}"]??null;

    // if(isset($capital)){
    //     echo "<br>The capital of <b>{$country}</b> is <b>{$capital}</b>";
    // }
    // else{
    //     echo"country no found!";
    // }

    // //$capitals["USA"] = "Las Vegas";
    // //array_pop($capitals);
    // $capitals["China"] = "Beijing";
    // //array_shift($capitals);
    // //$keys = array_keys($capitals);
    // //$values = array_values($capitals);
    // //$capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    // //echo count($capitals);

    // foreach($capitals as $key => $value){
    //     echo "<br><b>{$value}</b> is the capital of <b>{$key}</b>";
    // }


}

{
    // foreach($_POST as $key => $value){
    //     echo "<br>{$key} = {$value}";
    // }

    // if(isset($_POST["login"])){

    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     if(empty($username)){
    //         echo "Username is empty";
    //     }
    //     else if(empty($password)){
    //         echo "Password is empty";
    //     }
    //     else{
    //         echo ("Hello {$username}");
    //     }
    // }
}

{
    // if(isset($_POST["confirm"])){

    //     if(isset($_POST["creditCard"])){
    //         $creditCard = $_POST["creditCard"];
    //         echo $creditCard;
    //     }
    //     else{
    //         echo "Credit card not selected";
    //     }
    // }
    
}

{
    // if(isset($_POST["submit"])){
        
    //     // if(isset($_POST["pizza"])){
    //     //     echo "You like Pizza <br>";
    //     // }
    //     // if(isset($_POST["hamburguer"])){
    //     //     echo "You like Hamburguer <br>";
    //     // }
    //     // if(isset($_POST["hotdog"])){
    //     //     echo "You like Hotdog <br>";
    //     // }
    //     // if(isset($_POST["taco"])){
    //     //     echo "You like Taco <br>";
    //     // }

    //     // if(empty($_POST["pizza"])){
    //     //     echo "You don't like Pizza <br>";
    //     // }
    //     // if(empty($_POST["hamburguer"])){
    //     //     echo "You don't like Hamburguer <br>";
    //     // }
    //     // if(empty($_POST["hotdog"])){
    //     //     echo "You don't like Hotdog <br>";
    //     // }
    //     // if(empty($_POST["taco"])){
    //     //     echo "You don't like Taco <br>";
    //     // }

    //     $foods = $_POST["foods"];
    //     foreach($foods as $food){
    //         echo $food . "<br>";
    //     }
    // }
}

{
    // function soma($num1, $num2){
    //     $resultado = $num1 + $num2;
    //     return $resultado;
    // }

    // echo soma(10, 15);
}
?>