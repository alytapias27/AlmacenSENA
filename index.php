<?php 

    /*      SE CARGAN LOS DTO      */
    /* * * * * * * * * * * * * * * */
    include_once 'modelo/dto/usuario.php';


    /*      SE CARGAN LOS DAO      */
    /* * * * * * * * * * * * * * * */
    //include_once 'modelo/dao/usuariodao.php';


    /*      SE CARGAN LOS CONTRONLADORES      */
    /* * * * * * * * * * * * * * * * * * * * */
    include_once 'controlador/plantilla.controlador.php';
    include_once 'controlador/usuario.controlador.php';


    /*      SE CREAN LOS OBJETOS DE ARRANQUE     */
    /* * * * * * * * * * * * * * * * * * * * * * */
    $objArranque = new ControladorPlantilla();
    $objArranque -> ctrCargarPlantilla();

?>