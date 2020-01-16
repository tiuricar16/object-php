<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         require_once 'Video.php';
         require_once 'Gafanhoto.php';
         require_once 'Visualizacao.php';
         
         $v[0] = new Video("Curso de PHP");
         $v[1] = new Video("Aula HTML");
         $v[2] = new video("CURSO DE JAVA SCRIPT");
         
         $g[0] = new Gafanhoto("Jubileu",20 , "M", "Juba");
         $g[1] = new Gafanhoto("Bianca Neves",30,"F","Biancanevalala");
         $r[0] = new Visualizacao($g[0],$v[0]);     
         $r[1] = new Visualizacao($g[0],$v[2]);
         
         $r[0]->avaliar();
         
         $r[1]->avaliarPorc(85);
         
         print_r($r);
         
        ?>
        </pre>
    </body>
</html>
