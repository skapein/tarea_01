<?php
// Declaración de variables
$integerVar = 42;          
$floatVar = 3.14;          
$stringVar = "Hola Mundo"; 
$booleanVar = true;        
$arrayVar = array("manzana", "banana", "cereza"); // Variable de array

// Mostrar las variables
echo "Variable entera: " . $integerVar . "<br>";
echo "Variable de punto flotante: " . $floatVar . "<br>";
echo "Variable de cadena: " . $stringVar . "<br>";
echo "Variable booleana: " . ($booleanVar ? 'true' : 'false') . "<br>";
echo "Variable de array: " . implode(", ", $arrayVar) . "<br>";


// Operaciones Aritméticas
$suma = $integerVar + $floatVar;       // Suma
$multiplicacion = $integerVar * $floatVar; // Multiplicación

// Imprimir resultados de operaciones aritméticas usando echo
echo "Resultado de la suma: " . $suma . "<br>";
echo "Resultado de la multiplicación: " . $multiplicacion . "<br>";


// Manipulación de Cadenas
$cadena1 = "Hola";
$cadena2 = "Mundo";

// Concatenación de dos cadenas
$cadenaConcatenada = $cadena1 . " " . $cadena2;

// Obtener la longitud de la cadena concatenada
$longitudCadena = strlen($cadenaConcatenada);

// Imprimir resultados de la manipulación de cadenas
echo "Cadena concatenada: " . $cadenaConcatenada . "<br>";
echo "Longitud de la cadena concatenada: " . $longitudCadena . "<br>";

//  Condicionales
if ($booleanVar) {
    echo "La variable booleana es true.<br>";
} else {
    echo "La variable booleana es false.<br>";
}

?>