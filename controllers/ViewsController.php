<?php
class ViewsController {
    private static $views_path = "./views/" ;
    public function view ($route) {
        //print "<br>&nbsp&nbsp- viewscontroller<br>&nbsp&nbsp&nbsp&nbsp{} viewscontroller" ;
        //print " -> ".$route ;
        //require_once (self::$views_path."URL.php") ;
        require_once (self::$views_path."header.php") ;
        require_once (self::$views_path.$route.".php") ;
        require_once (self::$views_path."footer.php") ;
    }

    public function __destruct () {
        unset ($this->route) ;
    }
}