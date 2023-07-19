<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            $p1=(int)$_POST["p1"];
            $p2=(int)$_POST["p2"];
            $p3=(int)$_POST["p3"];
            $p4=(int)$_POST["p4"];
            $p5=(int)$_POST["p5"];
            $p6=(int)$_POST["p6"];
            $p7=(int)$_POST["p7"];
            $p8=(int)$_POST["p8"];
            $p9=(int)$_POST["p9"];
            $p10=(int)$_POST["p10"];
            $p11=(int)$_POST["p11"];
            $p12=(int)$_POST["p12"];
            $p13=(int)$_POST["p13"];
            $p14=(int)$_POST["p14"];
            $p15=(int)$_POST["p15"];
            $p16=(int)$_POST["p16"];
            $p17=(int)$_POST["p17"];
            $p18=(int)$_POST["p18"];
            $p19=(int)$_POST["p19"];
            $p20=(int)$_POST["p20"];
            $p21=(int)$_POST["p21"];
            $p22=(int)$_POST["p22"];
            $p23=(int)$_POST["p23"];
            $p24=(int)$_POST["p24"];
            $pa=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8;
            $pc=$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16;
            $pr=$p17+$p18+$p19+$p20+$p21+$p22+$p23+$p24;
            $s=$_POST["sex"];
        //atencion
        if($s=="masculino"){
            if($pa<21){
                $a="prestas poca atención";
            }elseif ($pa>33){
                $a="prestas demasiada atención";
            }else{
                $a="atención adecuada";
            }
        }else{
            if($pa<24){
                $a="prestas poca atención";
            }elseif ($pa>36){
                $a="prestas demasiada atención";
            }else{
                $a="atención adecuada";
            }
        }
        //claridad
        if($s=="masculino"){
            if($pc<25){
                $c="debes mejorar tu claridad";
            }elseif ($pc>36){
                $c="excelente claridad";
            }else{
                $c="atención adecuada";
            }
        }else{
            if($pc<23){
                $c="debes mejorar tu claridad";
            }elseif ($pa>35){
                $c="excelente claridad";
            }else{
                $c="atención adecuada";
            }
        }
        //Reparacion
        if($s=="masculino"){
            if($pr<23){
                $r="debes mejorar tu reparacion";
            }elseif ($pr>36){
                $r="excelente reparacion";
            }else{
                $r="atención adecuada";
            }
        }else{
            if($pr<23){
                $r="debes mejorar tu reparacion";
            }elseif ($pr>35){
                $r="excelente reparacion";
            }else{
                $r="atención adecuada";
            }
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
            <p>Puntaje atencion:<?php  echo $pa?></p>
            <h2>Resultado:<?php  echo $a?></h2>
            <p>Puntaje claridad:<?php  echo $pc?></p>
            <h2>Resultado:<?php  echo $c?></h2>
            <p>Puntaje reparacionn:<?php  echo $pr?></p>
            <h2> Resultado:<?php echo $r?></h2>
        </div>
        <div class="sides"></div>

    </div>
</body>
</html>