<?php 

    require_once "../conexion.php";
    require_once "../dto/usuario.php";

    class UsuarioDao{

        /* * * * * * * *  ATRIBUTOS  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        // private $idUsuario;
        // private $correo;
        // private $contraseña;

        /* * * * * * * *  METODO CONSTRUCTOR * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        // function __construct( $objDtoUsuario ){
        //    $this -> idUsuario = $objDtoUsuario -> idUsuario();
        //    $this -> correo = $objDtoUsuario -> correo();
        //    $this -> contraseña = $objDtoUsuario -> contraseña();
        // }

        /* * * * * * * *  METODO INSERTAR  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        public function mdlInsertarUsuario(){
            //INGRESAR LA CONSULTA (SP - QUERY)
            $sql = 'call spInsertarUsuario(?, ?, ?)';

            try{
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion -> conectar() -> prepare($sql);
                //VALORES QUE SE VAN A INSERTAR
                $stmt -> bindParam (1, $this -> idUsuario,          PDO::PARAM_INT);
                $stmt -> bindParam (2, $this -> correo,             PDO::PARAM_STR);
                $stmt -> bindParam (3, $this -> contraseña,         PDO::PARAM_INT);

                $stmt -> execute();

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al insertar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }
        } 

        /* * * * * * * *  METODO MODIFICAR  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        public function mdlModificarUsuario(){
            //INGRESAR LA CONSULTA (SP - QUERY)
            $sql = ' call spModificarUsuario(?, ?, ?)';

            try{
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion -> conectar() -> prepare($sql);
                //VALORES QUE SE VAN A MODIFICAR
                $stmt -> bindParam (1, $this -> idUsuario,          PDO::PARAM_INT);
                $stmt -> bindParam (2, $this -> correo,             PDO::PARAM_STR);
                $stmt -> bindParam (3, $this -> contraseña,         PDO::PARAM_INT);

                $stmt -> execute();

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al modificar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }
        } 

        /* * * * * * * *  METODO ELIMINAR  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        public function mdlEliminarUsuario(){
            $sql = ' call spElimianarUsuario ( ? ) ';

            try{
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion -> conectar() -> prepare($sql);
                //VALOR QUE SE VA A ELIMINAR
                $stmt -> bindParam (1, $this -> idUsuario,          PDO::PARAM_INT);

                $stmt -> execute();

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al eliminar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }
        }

        /* * * * * * * *  METODO CONSULTAR  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        public function mdlConsultarUsuario(){
            $sql = ' call spConsultarUsuario ( ? ) ';

            try{
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion -> conectar() -> prepare($sql);
                //VALOR QUE SE VAN A CONSULTAR
                $stmt -> bindParam (1, $this -> idUsuario,          PDO::PARAM_INT);

                $stmt -> execute();
                $resulSet = $stmt;

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al consultar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }

            return $resulSet;
        }

        /* * * * * * * *  METODO LISTAR  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        public function mdlListarUsuario(){
            $sql = ' call spListarUsuario ( ? ) ';

            try{
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion -> conectar() -> prepare($sql);

                $stmt -> execute();
                $resulSet = $stmt;

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al listar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }

            return $resulSet;
        }

    }

    $objDtoUsuario = new Usuario();

    /*
    $objDtoUsuario -> setIdUsuario(1);
    $objDtoUsuario -> setIdCorreo("aleja@gmail.com");
    $objDtoUsuario -> setIdUsuario("123456");

    */

    $objDaoUsuario = new UsuarioDao(  $objDtoUsuario );

    //$objDaoUsuario -> spInsertarUsuario();
    //$objDaoUsuario -> spModificarUsuario();
    //echo ( var_dump($objDaoUsuario -> spEliminarUsuario() ) );
    //echo ( var_dump($objDaoUsuario -> spColsultarUsuario() -> fetch() ) );
    //echo ( var_dump($objDaoUsuario -> spColsultarUsuario() -> fetchAll() ) ); ->si quiero mostrar todos los registros
    /* 
        foreach ( var_dump($objDaoUsuario -> spColsultarUsuario() -> fetch() as $campo => $valor){
            echo $campo . " : " . $valor;
    } */

    //echo ( var_dump($objDaoUsuario -> spListarUsuario() -> fetch() ) );
    /* 
        foreach ( var_dump($objDaoUsuario -> spListarUsuario() -> fetchAll() as $resgistro){ ->si quiero mostrar todos los registros
            foreach ( $registro as $campo -> $valor){
                echo $campo . " : " . $valor;
    } */

    //echo "SE HA INSERTADO EL USUARIO";
    //echo "SE HA MODIFICADO EL USUARIO";
    //echo "SE HA ELIMINADO EL USUARIO";

?> 
