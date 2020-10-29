<?php
class Autoload {
    public function __construct () {
        //print "[] controller<br>&nbsp&nbsp- autoload<br>&nbsp&nbsp&nbsp&nbsp{} autoload" ;
        spl_autoload_register (function ($class_name) {
            $controllers_path = "./controllers/".$class_name.".php" ;
            $models_path = "./models/".$class_name.".php" ;
            if (file_exists ($controllers_path)) require_once ($controllers_path);
            if (file_exists ($models_path)) require_once ($models_path);
        }) ;
    }

    public function __destruct () {
        unset ($this->class_name) ;
    }
}