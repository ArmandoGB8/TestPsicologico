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
        $suma=0;
        $text="hola";
        if(isset($_POST["p1"])){
            $p1=$_POST["p1"];
            $p2=$_POST["p2"];
            $p3=$_POST["p3"];
            $p4=$_POST["p4"];
            $p5=$_POST["p5"];
            $p6=$_POST["p6"];
            $p7=$_POST["p7"];
            $p8=$_POST["p8"];
            $p9=$_POST["p9"];
            $p10=$_POST["p10"];
            $suma=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;
            if ($suma>=30){
                $text="Autoestima elevada. Considerada como autoestima normal.";
            }if ($suma>=26){
                if($suma<=29){
                    $text="Autoestima media. No presenta problemas de autoestimagraves, pero es conveniente mejorarla";
                }
            }else{
                $text="Autoestima baja. Existen problemas significativos deautoestima.";
            }
        }
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
            <p>Puntaje:<?php  echo $suma?></p>
            <h2><?php Resultado: echo $text?></h2>
        </div>
        <div class="sides"></div>

    </div>
</body>
</html>