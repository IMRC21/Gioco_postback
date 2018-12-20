<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gioco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    
    
</head>
<body>
    <?php
        if($_POST){
            echo "Il messaggio è: " . "<div id='cripto'>" . $_POST["nome"] . "</div>";
            echo "<div id='output'>
            </div>
            ";
            echo "<button id='indietro' onclick='window.history.back()'> Torna indietro </button>";
            echo "<input type='hidden' id='indietro'>";
            echo "<script src='main.js'></script>";
        }else{
            echo "<h1> Bevenuto </h1>";
            echo "
            <form action ='index.php' method='POST' >
            <label> Inserisci la frase da criptare </label>
            <input type='text' name='nome' >
            <input type='submit'>
            ";
        }
        
    ?>
</body>
</html>