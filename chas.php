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
        $text="hola";
        $text2="hola2";
        $c=0;
        $h=0;
        $a=0;
        $s=0;
        $i=0;
        $d=0;
        $e=0;
        if(isset($_POST["p1"])){
            $c=$_POST["p98"]+$_POST["p12"]+$_POST["p64"]+$_POST["p53"]+$_POST["p85"]+$_POST["p1"]+$_POST["p78"]+$_POST["p20"]+$_POST["p71"]+$_POST["p91"]+$_POST["p15"]+$_POST["p51"]+$_POST["p2"]+$_POST["p46"];
            $h=$_POST["p9"]+$_POST["p34"]+$_POST["p80"]+$_POST["p25"]+$_POST["p95"]+$_POST["p67"]+$_POST["p41"]+$_POST["p74"]+$_POST["p56"]+$_POST["p89"]+$_POST["p63"]+$_POST["p30"]+$_POST["p72"]+$_POST["p86"];
            $a=$_POST["p21"]+$_POST["p45"]+$_POST["p96"]+$_POST["p57"]+$_POST["p28"]+$_POST["p11"]+$_POST["p50"]+$_POST["p3"]+$_POST["p81"]+$_POST["p36"]+$_POST["p22"]+$_POST["p39"]+$_POST["p76"]+$_POST["p82"];
            $s=$_POST["p33"]+$_POST["p92"]+$_POST["p70"]+$_POST["p8"]+$_POST["p87"]+$_POST["p62"]+$_POST["p23"]+$_POST["p44"]+$_POST["p16"]+$_POST["p52"]+$_POST["p69"]+$_POST["p40"]+$_POST["p29"]+$_POST["p4"];
            $i=$_POST["p75"]+$_POST["p6"]+$_POST["p19"]+$_POST["p38"]+$_POST["p60"]+$_POST["p27"]+$_POST["p83"]+$_POST["p54"]+$_POST["p47"]+$_POST["p97"]+$_POST["p26"]+$_POST["p59"]+$_POST["p90"]+$_POST["p10"];
            $d=$_POST["p84"]+$_POST["p31"]+$_POST["p48"]+$_POST["p73"]+$_POST["p5"]+$_POST["p65"]+$_POST["p14"]+$_POST["p37"]+$_POST["p58"]+$_POST["p24"]+$_POST["p13"]+$_POST["p66"]+$_POST["p18"]+$_POST["p43"];
            $e=$_POST["p77"]+$_POST["p42"]+$_POST["p8"]+$_POST["p17"]+$_POST["p93"]+$_POST["p32"]+$_POST["p68"]+$_POST["p49"]+$_POST["p35"]+$_POST["p61"]+$_POST["p94"]+$_POST["p7"]+$_POST["p79"]+$_POST["p55"];
            if ($c>$h && $c>$a && $c>$s && $c>$i && $c>$d && $c>$e) {
                $text="Organizativo, Supervisión, Orden, Análisis y síntesis, Colaboración, Cálculo";
                $text2="Persuasivo, Objetivo, Práctico, Tolerante, Responsable, Ambicioso";
            }
            if ($h>$c && $h>$a && $h>$s && $h>$i && $h>$d && $h>$e) {
                $text="Precisión verbal, Organización, Relación de Hechos, Lingüística, Orden, Justicia";
                $text2="Responsable, Justo, Conciliador, Persuasivo, Sagaz, Imaginativo";
            }
            if ($a>$c && $a>$h && $a>$s && $a>$i && $a>$d && $a>$e) {
                $text="Estético, Armónico, Manual, Visual, Auditivo";
                $text2="Sensible, Imaginativo, Creativo, Detallista, Innovador, Intuitivo";
            }
            if ($s>$c && $s>$h && $s>$a && $s>$i && $s>$d && $s>$e) {
                $text="Asistir, Investigativo, Precisión, Senso-Perceptivo, Analítico, Ayudar";
                $text2="Altruista, Solidario, Paciente, Comprensivo, Respetuoso, Persuasivo";
            }
            if ($i>$c && $i>$h && $i>$a && $i>$s && $i>$d && $i>$e) {
                $text="Cálculo, Científico, Manual, Exacto, Planificar";
                $text2="Preciso, Práctico, Crítico, Analítico, Rígido";
            }
            if ($d>$c && $d>$h && $d>$a && $d>$s && $d>$i && $d>$e) {
                $text="Justicia, Equidad, Colaboración, Espíritu de Equipo, Liderazgo";
                $text2="Arriesgado, Solidario, Valiente, Agresivo, Persuasivo";
            }
            if ($e>$c && $e>$h && $e>$a && $e>$s && $e>$i && $e>$d) {
                $text="Clasificar, Numérico, Análisis y Síntesis, Organización, Orden, Investigación";
                $text2="Metódico, Analítico, Observador, Introvertido, Paciente, Seguro";
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
            <p>Puntaje adiministrivas y contables:<?php  echo $c?></p>
            <p>Puntaje humanisticas y sociales:<?php  echo $h?></p>
            <p>Puntaje artisticas:<?php  echo $a?></p>
            <p>Puntaje medicina y ciencias de la salud:<?php  echo $s?></p>
            <p>Puntaje ingenieria y computacion:<?php  echo $i?></p>
            <p>Puntaje defensa y seguridad:<?php  echo $d?></p>
            <p>Puntaje ciencias exactas y agrarias:<?php  echo $e?></p>
            <h2>Intereses:<?php  echo $text?></h2>
            <h2>Aptitudes:<?php  echo $text2?></h2>
        </div>
        <div class="sides"></div>

    </div>
</body>
</html>