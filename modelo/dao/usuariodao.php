<?php

    require_once "modelo/conexion.php";

    class UsuarioDao{

        /* ATRIBUTOS */
        /* * * * * * */
        private $idUsuario;
        private $correo;
        private $contraseña;
        private $fecha;

        /* * * METODO CONSTRUCTOR * * */
        /* * * * * * * * * * * * * * */
        function __construct( $objUsuario ){

            $this -> idUsuario      = $objUsuario -> getIdUsuario();
            $this -> correo         = $objUsuario -> getCorreo();
            $this -> contraseña     = $objUsuario -> getContraseña();
            $this -> fecha          = $objUsuario -> getFecha();
        }

        /* * * METODO CONSULTAR * * */
        /* * * * * * * * * * * * * */
        public function mdlConsultarUsuario(){
            $sql = "call spConsultarUsuario ( ?, ?)";

            try{
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion -> conectar() -> prepare($sql);
                //VALOR QUE SE VAN A CONSULTAR
                $stmt -> bindParam ( 1, $this -> correo,        PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this -> contraseña,    PDO::PARAM_STR);
                //EJECUTAMOS
                $stmt -> execute();
                //DEVOLVEMOS UN RESULSET
                $resulSet = $stmt;

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al consultar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }

            return $resulSet;
        }


    }


?>