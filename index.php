<!--vinculando mi header-->
<?php include 'includes/header.php'; ?>

<!--codigo inicio php-->
<?php

//echo
//echo ("Hola mundo");

//variables
$nombre = "Richard Ortiz";
//echo $nombre;
//var_dump($nombre);

define('constante', 'este es el valor de la constante');
//echo constante;

const constante2 = "Hola mundo 2";
//echo constante2;

$nombreCliente = "Richard Ortiz Sasvin";
$nombre_cliente = "David Ortiz";
//echo $nombre_cliente;

//tipos de datos
//boolean
$loguin = true;
//var_dump($loguin);
//enteros
$numero = 200;
//var_dump($numero);

//floats
$float = 250.55;
//ar_dump($float);

//array
$array = [];
//var_dump($array);

//operadores
$variable1 = 40;
$variable2 = 30;

//sumar
//echo $variable1 + $variable2;

//Resta
//echo $variable1 - $variable2;

//Multiplicacion
//echo $variable1 * $variable2;

//multiplicacion x cantidad * cantidad veces
//echo 2 ** 2;

//**COMPARACIONES EN PHP */
$variable1 = 20;
$variable2 = 40;
$variable3 = 40;

//**-1 si izq. es menor, 0 si es igual, 1 si izq. es mayor */
//var_dump($variable1 <=> $variable2);
//var_dump($variable2 <=> $variable3);
//var_dump($variable2 <=> $variable1);

/**incrementar numeros */
//echo ++$variable1; //incremento una vez el valor de mi variable
$variable1 += 5;
$variable2 = 30;
//echo --$variable2; //decremento una vez el valor de mi variable.
//echo $variable1;

//**String y sus metodods */
$nombreCliente = "Otto Campos"; // nombreCliente nombre_cliente
$emailCliente = 'micorreo@micorreo.com';
//conocer la extension de un string
//echo strlen($nombreCliente);
//var_dump($nombreCliente);
//$textoSinEspacio = trim($nombreCliente);
//funcion para colocar el texto en mayusculas
//echo strtoupper($nombreCliente);
//funcion para colocar el texto en minusculas
//echo strtolower($nombreCliente);
//echo "El cliente: " . $nombreCliente . ", su email es: " . $emailCliente;

//**arrays */
$compras = ['Tablet', 'Laptop', 'Play5'];

//
//echo "<pre>";
//var_dump($compras);
//echo "</pre>";

//acceder a un elemento especifico
//echo $compras[0];

//agregar un elemento en el indice del arreglo
$compras[3] = "Iphone 14 Pro Max";
//agregamos con esta funcion array_push un elemento nuevo al final
array_push($compras, "Iphone 14 pro max");
//agregar al inicio
array_unshift($compras, "Apple Watch 7");
//echo "<pre>";
//var_dump($compras);
//echo "</pre>";

//**arreglos completos */
$cliente = [
    'nombre' => 'Otto Campos',
    'Saldo' => 15000,
    'Direccion' => 'Sanarate, El Progreso',
    'estatus' => 'Pendiente',
    'Informacion' => [
        'tipoCliente' => 'premium',
        'disponibilidad' => 20000
    ]
];

$cliente['codigo'] = 12323;

//echo "<pre>";
//var_dump($cliente);
//echo "</pre>";

//**CONDICIONALES EN PHP */

$autenticando = true;
$admin = false;

//condicion if
//if ($autenticando && $admin) {
//    echo "Usuario auntenticado correctamente";
//} else {
//    echo "Usuario no autenticado, inicia sesión";
//}

//if anidado
$cliente = [
    'nombre' => 'Otto',
    'saldo' => 0,
    'Informacion' => [
        'tipo' => 'regular'
    ]
];

//echo "<br>";
//if (!empty($cliente)) {
//    echo 'El arreglo de cliente no esta vacio.';

//    if ($cliente['saldo'] <= 0) {
//        echo "Cliente tiene saldo disponible";
//    } else {
//        echo "  No hay saldo";
//    }
//}
//echo "<br>";

//**foreach */
$productos = [
    [
        'codigo' => 1,
        'nombre' => 'tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'codigo' => 2,
        'nombre' => 'Smart TV',
        'precio' => 2000,
        'disponible' => true
    ],
    [
        'codigo' => 3,
        'nombre' => 'tablet2',
        'precio' => 300,
        'disponible' => false
    ]
];

//recorrido lo puedo realizar con foreach
foreach ($productos as $producto) {
?><li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "Q. " . $producto['precio']; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?></p>
    </li>
<?php
}

//**funciones */
function sumar(int $numero1 = 0, int $numero2 = 0)
{
    echo $numero1 + $numero2;
}
sumar(10, 10);
//echo sumar();






?>
<!--codigo php final-->



<!--vinculando mi footer-->
<?php include 'includes/footer.php'; ?>
