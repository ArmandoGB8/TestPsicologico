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
        $i=1;
        $sa=0;
        $sb=0;
        $sc=0;
        $text="hi";
        while ($i<=10) {
            if(isset($_POST["p".$i])){
                if($_POST["p".$i]=="a"){
                    $sa++;
                }if($_POST["p".$i]=="b"){
                    $sb++;
                }if($_POST["p".$i]=="c"){
                    $sc++;
                }
            }
            $i++;
        }
        if ($sa>$sb) {
            if($sa>$sc){
                $text="<ul type=circle>
                    <li>Trabajos que les permiten persuadir a la gente</li>
                    <li>Responsabilidades que les permiten relacionarse con los directivos más altos</li>
                    <li>Tareas que les da la oportunidad de enseñar</li>
                    <li>Reconocimientos que tienen una base muy amplia (por
                    ejemplo: utilizando los medios de comunicación) y que son visibles por personas que tienen influencia en la organización
                    </li>
                    <li>Nombramientos que reconocen sus logros y influencia en la organización</li>
                    <li>Cartas a familiares enfatizando su impacto para beneficiar
                    a la institución, los clientes, y la comunidad
                    </li>
                    <li>Trabajos que ofrecen mayor responsabilidad y autoridad</li>
                    <li>Notas personalizadas del supervisor y altos directivos agradeciendo su aportación para mejorar la comunidad y la condición humana
                    </li>
                    <li>Un programa que lleve su nombre</li>
                    <li>Oportunidad para aportar en el establecimiento de las metas organizacionales</li>
                </ul>";
            }
        } else {
            if ($sb>$sc) {
                $text="<ul type=circle>
                    <li>Reconocimiento en presencia de colegas y miembros de la familia</li>
                    <li>Mención en el boletín o comunicación de la organización</li>
                    <li>Su nombre y/o fotografía en un área pública de la organización</li>
                    <li>Una nota personal enviada por el supervisor</li>
                    <li>Un supervisor que recuerde el cumpleaños o un evento especial</li>
                    <li>Oportunidades para socializar en su trabajo</li>
                    <li>Trabajos que ofrecen oportunidades para interacción personal</li>
                    <li>Oportunidades para aportar retroalimentación en temas sobre el personal de la organización</li>
                    <li>Expresiones de afecto y apreciación por su trabajo</li>
                    <li>Entrenamientos y capacitaciones personalizados en el trabajo</li>
                </ul>";
            } else {
                $text="<ul type=circle>
                    <li>Oportunidades para participar en decisiones acerca de metas</li>
                    <li>Tener toda la responsabilidad delegada a ellos, y la habilidad de manejarla a su propio paso</li>
                    <li>Oportunidad para crear ideas innovadoras y de lograr sus metas</li>
                    <li>Exhibición en un área</li>
                    <li>Cartas de recomendación y reconocimiento a sus jefes o a los periódicos locales por un trabajo específico</li>
                    <li>Trabajos que tienen evaluaciones constantes para marcar éxitos</li>
                    <li>Algún premio o reconocimiento por un programa específico</li>
                    <li>Carta a los miembros de su familia informando sobre algún éxito específico</li>
                    <li>Trabajos que ofrecen mayor responsabilidad</li>
                </ul>";
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
            <h2>Poder: <?php echo $sa?></h2>
            <h2>Personal: <?php echo $sb?></h2>
            <h2>Afiliacion: <?php echo $sc?></h2>
            <p><?php Resultado: echo $text?></p>
        </div>
        <div class="sides"></div>

    </div>
</body>
</html>