<?php
class Router {
    private $route ;
    public function __construct ($route) {          
        if (!isset ($_SESSION)) session_start () ;
        if (!isset ($_SESSION['i'])) $_SESSION ['i'] = false ;

        //print " -> ".$route ;
        $viewscontroller = new ViewsController () ;
        $divide = explode ("/", $route) ;

        if (isset ($divide [1])) {
            if ($divide [1] == "detail") { 
                $viewscontroller -> view ("detail") ; 
            } elseif ($divide [1] == "update_cliente") { 
                $viewscontroller -> view ("update_cliente") ; 
            } else { 
                $viewscontroller -> view ("error404") ; 
            }
        } elseif (isset ($divide [0])) {
            if ($divide [0] == "home") { 
                $viewscontroller -> view ("home") ; 
            } elseif ($divide [0] == "blog") { 
                $viewscontroller -> view ("blog") ; 
            } elseif ($divide [0] == "administrador") { 
                $viewscontroller -> view ("administrador") ; 
            } elseif ($divide [0] == "cliente") { 
                $viewscontroller -> view ("cliente") ; 
            } elseif ($divide [0] == "tienda") { 
                $viewscontroller -> view ("tienda") ; 
            } else { 
                $viewscontroller -> view ("error404") ; 
            }
        }
    }

    public function __destruct () {
        unset ($this->route) ;
    }
}