<?php

    class Usuario{

        /* ATRIBUTOS */
        /* * * * * * */
        private $idUsuario;
        private $correo;
        private $contraseña;
        private $fecha;

        /* GETTERS */
        /* * * * * */
        public function getIdUsuario(){
            return $this -> idUsuario;
        }
        public function getCorreo(){
            return $this -> correo;
        }
        public function getContraseña(){
            return $this -> contraseña;
        }
        public function getFecha(){
            return $this -> fecha;
        }

        /* SETTERS */
        /* * * * * */
        public function setCorreo( $correo ){
            $this -> correo = $correo;
        }
        public function setContraseña( $contraseña ){
            $this -> contraseña = $contraseña;
        }

    }

?>