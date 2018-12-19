<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gioco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src='main.js'></script>
    
</head>
<body>
    <?php
        if($_POST){
            echo "";
            echo "<center><div id='output'></div>
            
            </center>";

        }else{
            echo "<h1> Bevenuto </h1>";
            echo "
            <form action ='index.php' method='POST' >
            <label> Inserisci la frase da criptare </label>
            <input type='text' name='nome' id='Nome'>
            <input type='submit'>
            ";
        }
        
    ?>
</body>
</html>