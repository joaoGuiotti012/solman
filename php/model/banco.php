<?php 
    class Banco{
        private static $dbnome = 'lpbcc19';
        private static $dbhost = 'localhost';
        private static $user = 'root';
        private static $senha = '';

        private static $conn = null;
        public function __construct()
        {
            die('A função init não é permitido');        
        }

        public static function Conectar(){

            if(self::$conn == null){
                try{
                    self::$conn = new PDO('mysql:host='.self::$dbhost.';dbname='.self::$dbnome.';charset=utf8', self::$user, self::$senha);
                }
                catch(PDOException $execption){
                    die($execption->getMessage());

                }
            }
            return self::$conn;
        }

        public static function desconectar(){
            self::$conn = null;
        }

    }
?>

