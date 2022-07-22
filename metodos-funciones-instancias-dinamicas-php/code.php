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

foreach($classArray as $class){

    $instance=new $class();
    $methodName='get'.$class.'Name';
    echo $instance->$methodName();
    echo '<br>';
}

// OUTPUT:
// Juan Perez
// Mouse pad
?>