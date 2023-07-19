<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css" />
    <!-- <link rel="stylesheet" href="test_style.css"> -->
    <style>
        body{
            font-size: large;
            text-align: center;
        }
    </style>
    <title>Resultados</title>
    <?php
        $suma = 0;
        $text = "";
        for ($i=1; $i < 16; $i++) { 
            if($_POST["p".$i] == "A")
                $suma += 3;
            else if($_POST["p".$i] == "B")
                $suma += 2;
            else
                $suma += 1;
        }
        
        if($suma == 45)
            $text = "Asertividad o seguridad máxima";
        else if(31<=$suma && $suma<=38)
            $text = "Usted tiene una Asertividad solida";
        else if(24<=$suma && $suma<=30)
            $text = "Usted tiene una Asertividad media, normal";
        else if(16<=$suma && $suma<=23)
            $text = "Asertividad baja, Usted es inseguro";
        else if($suma == 15)
            $text = "Asertividad muy baja, usted es muy inseguro.";
        else
            $text = "SI";
    ?>
</head>
<body>
<header>
        <a href="intro.html">
            <h1>Test de asertividad</h1>
        </a>
    </header>
    <div id="container">
        <div class="sides"></div>
        <div id="resul">
            <h2>Resultado: <?php echo $suma ?></h2>
            <p><?php echo $text ?></p>
        </div>
        <div class="sides"></div>

    </div>
</body>
</html>