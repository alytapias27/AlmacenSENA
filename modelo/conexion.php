<?php

    /* CONEXION A LA BASE DE DATOS */

    class Conexion{

        private $driver;
        private $host;
        private $user;
        private $pass;
        private $database;
        private $charset;

        /* METODO CONSTRUCTOR */
        function __construct(){

            $archivo = '../../util/config.ini';

            if (!$vector = parse_ini_file($archivo)) throw new Exception ("Ojo no se puede abrir el archivo " . $archivo, 1);

            $this -> driver = $vector['driver'];
            $this -> host = $vector['host'];
            $this -> user = $vector['user'];
            $this -> pass = $vector['pass'];
            $this -> database = $vector['database'];
            $this -> charset = $vector['charset'];
            //echo var_dump($vector);
            //print 'pruebaaaaa';
        }

        /* CADENA DE CONEXION */
        public function conectar(){

            try{
                //si todo funciona bien, se ejecutara solo el try
                $cadena = $this -> driver . ':host=' . $this -> host . ';bdname=' . $this -> database;

                //INSTANCIAR LA CLASE PDO
                $conexion = new PDO($cadena, $this -> user, $this -> pass);

                $conexion -> setAttribute (PDO::ATTR_ERRMODE,                 PDO::ERRMODE_EXCEPTION);
                $conexion -> setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE,      PDO::FETCH_ASSOC);

                //ESTABLECEMOS LA CONECCION CON Ñ Y TILDES 
                $conexion -> exec ('SET CHARACTER SET ' . $this -> charset);

    
                //echo $cadena;
                //echo var_dump($conexion);

            } catch ( PDOException $e) { //si hay error en la conexion PDO
                die('Error en la conexion PDO ' . $e->getMessage());
                echo 'Linea de error: ' . $e->getLine();
                //si algo del try genera error, se ejecutara el catch
            } catch ( Exception $ex ) { //si hay un error en la clase creada
                die('Error en la conexion ' . $ex->getMessage());
                echo 'Linea de error: ' . $ex->getLine();
            }

            return $conexion;
        }

    }

    $objCon =  new Conexion();
    echo var_dump ($objCon -> conectar() );

?>