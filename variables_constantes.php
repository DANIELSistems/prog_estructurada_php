<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </title>Variables y constantes en php</title>
</head>
<body>
    <h1>Varibles y constantes en php</h1>
    <?php
        //Las variables se representan anteponiendo el simbolo $ a la palabra que se use como vrible
        //PHP es sencitive case
        //Las variables no pueden empezar con un numero
        //En php no es necesrio especificr el tipo de vrible, pero si debe sber cuando utilizar ls
        //comills,pr el cso de vribles de tipo de cden o sprint.

        //signmos  l vrible el vlor 5
        $a=5;

        //signmos  la vrible b el vlor 7 como cden
        $b= "7";

        echo "<h2>Vribles</h2>";

        //mostr el vlor de l vrible 
        echo ($a);

        echo "<br>";

        //mostr el vlor de l vrible b
        echo($b);

        echo "<br>";

        echo "<h2>Constntes</h2>";

        /*EL vlor de un constnte no cmbi o se mntiene fijo durnte l ejecucion de un pgin*/

        /*L form de definir ls constntes en php, es medinte el uso dentro de l instruccion define*/

        define(constant_name:"Cpitl_colombi","Bogota");
    ?>
</body>
</html>