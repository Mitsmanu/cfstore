<?php
    class Db{
        private static $conexion=null;
        private $servername = "localhost";
        private $dbname = "login";
        private $username = "testsite";
        private $password = "1234567";

        private function __construct(){}
        public  function conectar(){

        try {
            $dsn="mysql:host={$this->servername};dbname=$this->dbname;charset=UTF8";
            $mOptions=array(
                              PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                              PDO::ATTR_EMULATE_PREPARES => FALSE, 

                            )
            self::$conexion=new PDO($dsn, $username, $password, $mOptions);
            return self::$conexion;
            }
        catch(PDOException $e)
            {
            echo "Connection failed: ERROR PERSONALIZADO EVITA USAR getMessage";
            }
        }
    }
?>
