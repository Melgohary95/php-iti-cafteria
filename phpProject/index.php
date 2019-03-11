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
        /*         * ******* Auto loader ****** */

        spl_autoload_register(
                function ($class) {
            var_dump("hhhhh");
            ;
//          var_dump($class);
            //$root = dirname(__DIR__);
            // ast5dmt el dir ashan yara2 el malf ay kan hwo mogoud fen aw tht ay foler
            $root = dirname(__DIR__);
//            var_dump($root);
            $file = $root . '/' . 'phpProject/' . str_replace('\\', '/', $class) . '.php';
            var_dump($file);
            //$file = $root.'/'.'mvc_framework_version2'.'/'.str_replace('\\','/', $class). '.php';
            if (is_readable($file)) {
                require $file;
            }
        }
        );

        session_start();
        //using db class
//$db = new core\Database();
        ?>

    </body>
</html>
