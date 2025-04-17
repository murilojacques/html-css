<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "Segunda", time()+3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                print('<h1>Superglobal $_GET</h1>');
                var_dump($_GET);

                print('<h1>Superglobal $_POST</h1>');
                var_dump($_POST);

                print('<h1>Superglobal $_REQUEST</h1>');
                var_dump($_REQUEST);

                print('<h1>Superglobal $_COOKIE</h1>');
                var_dump($_COOKIE);

                print('<h1>Superglobal $_SESSION</h1>');
                var_dump($_SESSION);

                print('<h1>Superglobal $_ENV</h1>');
                var_dump($_ENV);
                // foreach (getenv() as $c => $v){
                //     print("<br> $c -> $v");
                // }

                print('<h1>Superglobal $_SERVER</h1>');
                var_dump($_SERVER);

                print('<h1>Superglobal $GLOBALS</h1>');
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>
