<?php
namespace Fruits\Fruits;

class Carrot { 
    public function __construct() {
        echo "<center>Create Carrot</center>";
    }
    public function sayHello(string $str = "Hello") {
        echo $str."you are in Carrot";
    }
    
}

?>

