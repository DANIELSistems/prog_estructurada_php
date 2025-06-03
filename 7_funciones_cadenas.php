<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones manipulacion de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>Funcion substr()</h2>
    <?php
    $cadena = "Hola, mundo!";
    $subcadena = substr($cadena, 7, 5); // Extrae "mundo"
    echo $subcadena;
    ?>
    
    <h2>Funcion ord()</h2>
    <?php
        $letra = 'A';
        echo ord($letra); // Resultado: 65
?>


    <h2>Funcion printf()</h2>
    <?php
        $nombre = "Ana";
        $edad = 20;
        printf("Mi nombre es %s y tengo %d años.", $nombre, $edad);
// Resultado: Mi nombre es Ana y tengo 20 años.
?>


    <h2>Funcion sprintf()</h2>
    <?php
        $precio = 49.99;
        $texto = sprintf("El precio es: $%.2f", $precio);
        echo $texto;
// Resultado: El precio es: $49.99
?>


    <h2>Funcion strtolower()</h2>
    <?php
        $texto = "HOLA MUNDO";
        echo strtolower($texto); // Resultado: hola mundo
?>


    <h2>Funcion strtoupper()</h2>
    <?php
        $texto = "hola mundo";
        echo strtoupper($texto); // Resultado: HOLA MUNDO
?>


    <h2>Funcion ereg()</h2>
    <?php
// Solo funciona en versiones antiguas de PHP (<5.3)
        $cadena = "Hola123"; 
            if (ereg("^[A-Za-z]+$", $cadena)) {
            echo "Solo letras";
} else {
    echo "Contiene otros caracteres"; // Resultado
}
?>


    <h2>Funcion eregi()</h2>
    <?php
// Solo funciona en versiones antiguas de PHP (<5.3)
$cadena = "Hola";
if (eregi("^hola$", $cadena)) {
    echo "Coincide"; // Resultado
} else {
    echo "No coincide";
}
?>

    
</body>
</html>