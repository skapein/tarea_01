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
?>