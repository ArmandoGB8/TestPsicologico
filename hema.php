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
        if(isset($_POST["a1"])){
            $a1=$_POST["a1"];
            $a2=$_POST["a2"];
            $a3=$_POST["a3"];
            $a4=$_POST["a4"];
            $a5=$_POST["a5"];
            $a6=$_POST["a6"];
            $a7=$_POST["a7"];
            $a8=$_POST["a8"];
            $a9=$_POST["a9"];
            $a10=$_POST["a10"];
            $suma=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
        }
        if(isset($_POST["s1"])){
            $s1=$_POST["s1"];
            $s2=$_POST["s2"];
            $s3=$_POST["s3"];
            $s4=$_POST["s4"];
            $s5=$_POST["s5"];
            $s6=$_POST["s6"];
            $s7=$_POST["s7"];
            $s8=$_POST["s8"];
            $s9=$_POST["s9"];
            $s10=$_POST["s10"];
            $suma2=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;
        }
        if(isset($_POST["e1"])){
            $e1=$_POST["e1"];
            $e2=$_POST["e2"];
            $e3=$_POST["e3"];
            $e4=$_POST["e4"];
            $e5=$_POST["e5"];
            $e6=$_POST["e6"];
            $e7=$_POST["e7"];
            $e8=$_POST["e8"];
            $e9=$_POST["e9"];
            $e10=$_POST["e10"];
            $suma3=$e1+$e2+$e3+$e4+$e5+$e6+$e7+$e8+$e9+$e10;
        }
        if(isset($_POST["o1"])){
            $o1=$_POST["o1"];
            $o2=$_POST["o2"];
            $o3=$_POST["o3"];
            $o4=$_POST["o4"];
            $o5=$_POST["o5"];
            $o6=$_POST["o6"];
            $o7=$_POST["o7"];
            $o8=$_POST["o8"];
            $o9=$_POST["o9"];
            $o10=$_POST["o10"];
            $suma4=$o1+$o2+$o3+$o4+$o5+$o6+$o7+$o8+$o9+$o10;
        }
        if(isset($_POST["x1"])){
            $x1=$_POST["x1"];
            $x2=$_POST["x2"];
            $x3=$_POST["x3"];
            $x4=$_POST["x4"];
            $x5=$_POST["x5"];
            $x6=$_POST["x6"];
            $x7=$_POST["x7"];
            $x8=$_POST["x8"];
            $x9=$_POST["x9"];
            $x10=$_POST["x10"];
            $suma5=$x1+$x2+$x3+$x4+$x5+$x6+$x7+$x8+$x9+$x10;
        }
        if(isset($_POST["b1"])){
            $b1=$_POST["b1"];
            $b2=$_POST["b2"];
            $b3=$_POST["b3"];
            $b4=$_POST["b4"];
            $b5=$_POST["b5"];
            $b6=$_POST["b6"];
            $b7=$_POST["b7"];
            $b8=$_POST["b8"];
            $b9=$_POST["b9"];
            $b10=$_POST["b10"];
            $suma6=$b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9+$b10;
        }
        if(isset($_POST["m1"])){
            $m1=$_POST["m1"];
            $m2=$_POST["m2"];
            $m3=$_POST["m3"];
            $m4=$_POST["m4"];
            $m5=$_POST["m5"];
            $m6=$_POST["m6"];
            $m7=$_POST["m7"];
            $m8=$_POST["m8"];
            $m9=$_POST["m9"];
            $m10=$_POST["m10"];
            $suma7=$m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10;
        }
        if(isset($_POST["w1"])){
            $w1=$_POST["w1"];
            $w2=$_POST["w2"];
            $w3=$_POST["w3"];
            $w4=$_POST["w4"];
            $w5=$_POST["w5"];
            $w6=$_POST["w6"];
            $w7=$_POST["w7"];
            $w8=$_POST["w8"];
            $w9=$_POST["w9"];
            $w10=$_POST["w10"];
            $w11=$_POST["w11"];
            $w12=$_POST["w12"];
            $w13=$_POST["w13"];
            $w14=$_POST["w14"];
            $w15=$_POST["w15"];
            $w16=$_POST["w16"];
            $w17=$_POST["w17"];
            $w18=$_POST["w18"];
            $w19=$_POST["w19"];
            $w20=$_POST["w20"];
            $w21=$_POST["w21"];
            $w22=$_POST["w22"];
            $w23=$_POST["w23"];
            $w24=$_POST["w24"];
            $w25=$_POST["w25"];
            $w26=$_POST["w26"];
            $w27=$_POST["w27"];
            $w28=$_POST["w28"];
            $w29=$_POST["w29"];
            $w30=$_POST["w30"];
            $suma8=$w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12+$w13+$w14+$w15+$w16+$w17+$w18+$w19+$w20+$w21+$w22+$w23+$w24+$w25+$w26+$w27+$w28+$w29+$w30;
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
            <h2>Factores ambientales: <?php echo $suma ?></h2>
            <h2>Salud fisica y emocional: <?php echo $suma2 ?></h2>
            <h2>Aspectis sobre el metodo de estudio: <?php echo $suma3 ?></h2>
            <h2>Organizacion de planes y horarios: <?php echo $suma4 ?></h2>
            <h2>Realizacion de examenes: <?php echo $suma5 ?></h2>
            <h2>Busqueda de informacion: <?php echo $suma6 ?></h2>
            <h2>Busqueda de informacion: <?php echo $suma7 ?></h2>
            <p><?php echo "Ten en cuenta que el puntaje ideal es 10 en cada seccion" ?></p>
            <h2>Acerca de la motivacion para aprender: <?php echo $suma8 ?></h2>
            <p><?php echo "Ten en cuenta que el puntaje ideal es 30 en esta ultima seccion" ?></p>
        </div>
        <div class="sides"></div>

    </div>
</body>
</html>