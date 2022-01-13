<?php

namespace Fruits\Fruits;

use Fruits\Vegetables\BGfruids\Prune as P;
use Fruits\Fruits\Carrot as C;
class Pinapple {

    public function __construct() {
        echo "Create  Fruits/PineApple";
    }
    public function makeCarrot() {
        
        $carrot = new C();
        return $carrot;
    }
}




?>
