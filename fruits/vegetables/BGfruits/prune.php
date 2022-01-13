<?php
namespace Fruits\Vegetables\BGfruits;

use PineApple\PineApple as P;
use Fruits\Fruits\Carrot as Carrot;
class Prune{
    
    public function __construct() 
    {
        echo "You create a Prune";
    }
    public function makePineapple(Carrot $carrot) {
        $carrot->sayHello();
        
    }
    
}

