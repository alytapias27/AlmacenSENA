<?php

    class ControladorUsuario{

        public function ctrConsultarUsuario(){

            if(isset($_POST['txtCorreo'])){
                //echo '<scrpt>alert("INGRESO")</script>';
                $usuario = $_POST['txtCorreo'];
                $clave = $_POST['txtContraseña'];

                $objUsuario = new Usuario();
                $objUsuario -> setCorreo($usuario);
                $objUsuario -> setContraseña($clave);

                if($usuario == 'adsi' && $clave == 123){
                    echo '<scrpt>alert("CONTRASEÑA CORRECTA")</script>';
                } else {
                    echo '<scrpt>alert("CONTRASEÑA INCORRECTA")</script>';
                }

            }
        }
    }


?>