<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require __DIR__.'\vendor/autoload.php';
$carrot = new Fruits\Fruits\Carrot();die;
        $prune = new \Fruits\Vegetables\BGfruids\Prune();
//$r = new \Fruits\Vegetables\PineApple();
        $fruit = new Fruits\Fruits\Pinapple();
        $carrot = $fruit->makeCarrot();
        $prune->makePineapple($carrot);
        ?>
    </body>
</html>
