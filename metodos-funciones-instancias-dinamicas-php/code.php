<?php 
class User{
    public function getUserName(){
        return 'Juan Perez';
    }
}

class Product{
    public function getProductName(){
        return 'Mouse pad';
    }
}

$classArray=['User','Product'];

$tiempo_inicial = microtime(true); //true es para que sea calculado en segundos
for($i=0;$i<12000;$i++){
    foreach($classArray as $class){

        $instance=new $class();
    }
}


$tiempo_final = microtime(true);

$tiempo = $tiempo_final - $tiempo_inicial;
echo $tiempo;

// OUTPUT:
// Juan Perez
// Mouse pad
?>