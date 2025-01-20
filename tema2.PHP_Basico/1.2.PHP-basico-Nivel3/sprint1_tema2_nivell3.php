<?PHP declare(strict_types=1);
//Criba de Eratostenes: devolver los primos anteriores a un numero concreto
//1. tachar pares desde el 2
//2. se tachan todos los multiplos del primer num no tachado (primo)
//3. se vuelve al paso 2
//Termina cuando el primer primo**2 > n

// Crear array desde el 2 con todos los numeros enteros hasta n
function crearTabla(int $n) : array {   
    $tabla = [];  
    for($i=2; $i <= $n; $i++) {
        $tabla[$i]=$i;
    }
    return $tabla;
}

function imprimirTabla(array $tabla) : void {
    echo "<pre>". print_r($tabla, true) . "</pre>";
}

function imprimirPrimos(array $primos) : void {    
    foreach ($primos as $primo) {
        echo $primo . "<br>";
    }
}

//Elimina los multiplos del primer num del array
function tachaMultiplos(int $n, array $tabla) : array { 
    for($i = 2; $i**2 < $n; $i++) {
        if (array_key_exists($i, $tabla)) { // Por eficiencia. Para evitar que corra el for si no existe esa clave
            for($j=2; ($i*$j) <= $n; $j++) {
                unset($tabla[$i*$j]); 
                }
        }
    } 
    return $tabla;
}

$n = 226;
$tabla = crearTabla($n);
$tablaTachada = tachaMultiplos($n, $tabla);

echo "Números primos hasta $n con pre:";
imprimirTabla($tablaTachada);

echo "<p>Números primos hasta $n con foreach:</p>";
imprimirPrimos($tablaTachada);

?>
