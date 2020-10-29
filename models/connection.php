<?php
abstract class Connection {
    private static $database_host = "localhost" ;
    private static $database_user = "root" ;
    private static $database_pass = "" ;
    private static $database_name = "sofths" ;
    private static $database_char = "utf8" ;
    private $connected ;
    protected $query ;
    protected $rows = array () ;

    abstract protected function set () ;
    abstract protected function get () ;
    abstract protected function del () ;

    private function database_open () {
        $this->connected = new mysqli (
            self::$database_host ,
            self::$database_user ,
            self::$database_pass ,
            self::$database_name
        ) ;
        $this->connected->set_charset (
            self::$database_char
        ) ;
    }

    private function database_close  () {
        $this->connected->close () ;
    }

    protected function query_set () {
        $this->database_open () ;
        $this->connected->query ($this->query) ;
        $this->database_close () ;
    }
    
    protected function query_get () {
        $this->database_open () ;
        $result = $this->connected->query ($this->query) ;
        while ($this->rows [] = $result->fetch_assoc ()) ;
        $result->close () ;
        $this->database_close () ;
        return array_pop ($this->rows) ;
    }
}