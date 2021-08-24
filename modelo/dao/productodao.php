<?php

    require_once "../conexion.php";
    //require_once "../dto/producto.php";

    class ProductoDao{

        /* * * * * * * *  ATRIBUTOS  * * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * */
        private $idProducto;
        private $nombreProducto;
        private $unidadMedida;
        private $cantidad;
        private $foto;
        private $controlCantidadInventario;
        private $paraConsumo;
        private $mercanciaVenta;
        private $esServicio;
        private $incluirConteoFisico;
        private $productoActivo;
        private $datosFabricante;
        private $referencias;
        private $medidas;
        private $presentacion;
        private $ubicacionFisica;
        private $productoEquivalente;
        private $costoUnitarioPromedio;
        private $costoTotalpromedio;
        private $stockMaximo;
        private $stockMinimo;
        private $tiempoReposicion;
        private $cuentaInventarios;
        private $cuentaContableIngresos;
        private $cuentaContableIngresosAjustes;
        private $cuentaContableDevolucionVentas;
        private $cuentaContableCostos;
        private $cuentaContableDevolucionCompras;
        private $cuentaContableGastos;
        private $cuentaContableGastosAjustes;
        private $impuestosCompras; 
        private $impuestosVentas; 

        /* * * * * * * *  METODO CONSTRUCTOR  * * * * * * */
        /* * * * * * * * * * * * * * * * * * * * * * * * */
        function __construct( $objDtoProducto ){
            $this -> idProducto = $objDtoProducto -> idProducto();
            $this -> nombreProducto = $objDtoProducto -> nombreProducto();
            $this -> unidadMedida = $objDtoProducto -> unidadMedida();
            $this -> cantidad = $objDtoProducto -> cantidad();
            $this -> foto = $objDtoProducto -> foto();
            $this -> controlCantidadInventario = $objDtoProducto -> controlCantidadInventario();
            $this -> paraConsumo = $objDtoProducto -> paraConsumo();
            $this -> mercanciaVenta = $objDtoProducto -> mercanciaVenta();
            $this -> esServicio = $objDtoProducto -> esServicio();
            $this -> incluirConteoFisico = $objDtoProducto -> incluirConteoFisico();
            $this -> productoActivo = $objDtoProducto -> productoActivo();
            $this -> datosFabricante = $objDtoProducto -> datosFabricante();
            $this -> referencias = $objDtoProducto -> referencias();
            $this -> medidas = $objDtoProducto -> medidas();
            $this -> presentacion = $objDtoProducto -> presentacion();
            $this -> ubicacionFisica = $objDtoProducto -> ubicacionFisica();
            $this -> productoEquivalente = $objDtoProducto -> productoEquivalente();
            $this -> costoUnitarioPromedio = $objDtoProducto -> costoUnitarioPromedio();
            $this -> costoTotalpromedio = $objDtoProducto -> costoTotalpromedio();
            $this -> stockMaximo = $objDtoProducto -> stockMaximo();
            $this -> stockMinimo = $objDtoProducto -> stockMinimo();
            $this -> tiempoReposicion = $objDtoProducto -> tiempoReposicion();
            $this -> cuentaInventarios = $objDtoProducto -> cuentaInventarios();
            $this -> cuentaContableIngresos = $objDtoProducto -> cuentaContableIngresos();
            $this -> cuentaContableIngresosAjustes = $objDtoProducto -> cuentaContableIngresosAjustes();
            $this -> cuentaContableDevolucionVentas = $objDtoProducto -> cuentaContableDevolucionVentas();
            $this -> cuentaContableCostos = $objDtoProducto -> cuentaContableCostos();
            $this -> cuentaContableDevolucionCompras = $objDtoProducto -> cuentaContableDevolucionCompras();
            $this -> cuentaContableGastos = $objDtoProducto -> cuentaContableGastos();
            $this -> cuentaContableGastosAjustes = $objDtoProducto -> cuentaContableGastosAjustes();
            $this -> impuestosCompras = $objDtoProducto -> impuestosCompras();
            $this -> impuestosVentas = $objDtoProducto -> impuestosVentas();
        }

        //METODO INSERTAR 
        function mdlInsertarProducto(){
            //INGRESAR LA CONSULTA (SP - QUERY)
            $sql = ' call spInsertarProducto(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)';

            try {
                //INSTANCIAR LA BASE DE DATOS
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);
                //VALORES QUE SE VAN A INSERTAR
                $stmt -> bindParam (1, $this -> idProducto,                            PDO::PARAM_INT);
                $stmt -> bindParam (2, $this -> nombreProducto,                        PDO::PARAM_STR);
                $stmt -> bindParam (3, $this -> unidadMedida,                          PDO::PARAM_STR);
                $stmt -> bindParam (4, $this -> cantidad,                              PDO::PARAM_INT);
                $stmt -> bindParam (5, $this -> foto,                                  PDO::PARAM_STR);

                $stmt -> bindParam (6, $this -> controlCantidadInventario,             PDO::PARAM_BOOL);
                $stmt -> bindParam (7, $this -> paraConsumo,                           PDO::PARAM_BOOL);
                $stmt -> bindParam (8, $this -> mercanciaVenta,                        PDO::PARAM_BOOL);
                $stmt -> bindParam (9, $this -> esServicio,                            PDO::PARAM_BOOL);
                $stmt -> bindParam (10, $this -> incluirConteoFisico,                  PDO::PARAM_BOOL);

                $stmt -> bindParam (11, $this -> productoActivo,                       PDO::PARAM_BOOL);
                $stmt -> bindParam (12, $this -> datosFabricante,                      PDO::PARAM_STR);
                $stmt -> bindParam (13, $this -> referencias,                          PDO::PARAM_STR);
                $stmt -> bindParam (14, $this -> medidas,                              PDO::PARAM_STR);
                $stmt -> bindParam (15, $this -> presentacion,                         PDO::PARAM_STR);

                $stmt -> bindParam (16, $this -> ubicacionFisica,                      PDO::PARAM_STR);
                $stmt -> bindParam (17, $this -> productoEquivalente,                  PDO::PARAM_STR);
                $stmt -> bindParam (18, $this -> costoUnitarioPromedio,                PDO::PARAM_INT);
                $stmt -> bindParam (19, $this -> costoTotalpromedio,                   PDO::PARAM_INT);
                $stmt -> bindParam (20, $this -> stockMaximo,                          PDO::PARAM_INT);

                $stmt -> bindParam (21, $this -> stockMinimo,                          PDO::PARAM_INT);
                $stmt -> bindParam (22, $this -> tiempoReposicion,                     PDO::PARAM_STR);
                $stmt -> bindParam (23, $this -> cuentaInventarios,                    PDO::PARAM_STR);
                $stmt -> bindParam (24, $this -> cuentaContableIngresos,               PDO::PARAM_STR);
                $stmt -> bindParam (25, $this -> cuentaContableIngresosAjustes,        PDO::PARAM_STR);

                $stmt -> bindParam (26, $this -> cuentaContableDevolucionVentas,       PDO::PARAM_STR);
                $stmt -> bindParam (27, $this -> cuentaContableCostos,                 PDO::PARAM_STR);
                $stmt -> bindParam (28, $this -> cuentaContableDevolucionCompras,      PDO::PARAM_STR);
                $stmt -> bindParam (29, $this -> cuentaContableGastos,                 PDO::PARAM_STR);
                $stmt -> bindParam (30, $this -> cuentaContableGastosAjustes,          PDO::PARAM_STR);

                $stmt -> bindParam (31, $this -> impuestosCompras,                     PDO::PARAM_STR);
                $stmt -> bindParam (32, $this -> impuestosVentas,                      PDO::PARAM_STR);

                $stmt -> execute();

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
            } catch(PDOException $ex) {
                echo "Se ha presentado un error al insertar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
            }
        } 

        //METODO MODIFICAR
        function mdlModificarProducto(){
            //INGRESAR LA CONSULTA (SP - QUERY)
            $sql = 'call spModificarProducto(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)';

                try {
                    //INSTANCIAR LA BASE DE DATOS
                    $conexion = new Conexion();
                    $stmt = $conexion->conectar() -> prepare($sql);
                    //VALORES QUE SE VAN A MODIFICAR
                    $stmt -> bindParam (1, $this -> idProducto,                            PDO::PARAM_INT);
                    $stmt -> bindParam (2, $this -> nombreProducto,                        PDO::PARAM_STR);
                    $stmt -> bindParam (3, $this -> unidadMedida,                          PDO::PARAM_STR);
                    $stmt -> bindParam (4, $this -> cantidad,                              PDO::PARAM_INT);
                    $stmt -> bindParam (5, $this -> foto,                                  PDO::PARAM_STR);

                    $stmt -> bindParam (6, $this -> controlCantidadInventario,             PDO::PARAM_BOOL);
                    $stmt -> bindParam (7, $this -> paraConsumo,                           PDO::PARAM_BOOL);
                    $stmt -> bindParam (8, $this -> mercanciaVenta,                        PDO::PARAM_BOOL);
                    $stmt -> bindParam (9, $this -> esServicio,                            PDO::PARAM_BOOL);
                    $stmt -> bindParam (10, $this -> incluirConteoFisico,                  PDO::PARAM_BOOL);

                    $stmt -> bindParam (11, $this -> productoActivo,                       PDO::PARAM_BOOL);
                    $stmt -> bindParam (12, $this -> datosFabricante,                      PDO::PARAM_STR);
                    $stmt -> bindParam (13, $this -> referencias,                          PDO::PARAM_STR);
                    $stmt -> bindParam (14, $this -> medidas,                              PDO::PARAM_STR);
                    $stmt -> bindParam (15, $this -> presentacion,                         PDO::PARAM_STR);

                    $stmt -> bindParam (16, $this -> ubicacionFisica,                      PDO::PARAM_STR);
                    $stmt -> bindParam (17, $this -> productoEquivalente,                  PDO::PARAM_STR);
                    $stmt -> bindParam (18, $this -> costoUnitarioPromedio,                PDO::PARAM_INT);
                    $stmt -> bindParam (19, $this -> costoTotalpromedio,                   PDO::PARAM_INT);
                    $stmt -> bindParam (20, $this -> stockMaximo,                          PDO::PARAM_INT);

                    $stmt -> bindParam (21, $this -> stockMinimo,                          PDO::PARAM_INT);
                    $stmt -> bindParam (22, $this -> tiempoReposicion,                     PDO::PARAM_STR);
                    $stmt -> bindParam (23, $this -> cuentaInventarios,                    PDO::PARAM_STR);
                    $stmt -> bindParam (24, $this -> cuentaContableIngresos,               PDO::PARAM_STR);
                    $stmt -> bindParam (25, $this -> cuentaContableIngresosAjustes,        PDO::PARAM_STR);

                    $stmt -> bindParam (26, $this -> cuentaContableDevolucionVentas,       PDO::PARAM_STR);
                    $stmt -> bindParam (27, $this -> cuentaContableCostos,                 PDO::PARAM_STR);
                    $stmt -> bindParam (28, $this -> cuentaContableDevolucionCompras,      PDO::PARAM_STR);
                    $stmt -> bindParam (29, $this -> cuentaContableGastos,                 PDO::PARAM_STR);
                    $stmt -> bindParam (30, $this -> cuentaContableGastosAjustes,          PDO::PARAM_STR);

                    $stmt -> bindParam (31, $this -> impuestosCompras,                     PDO::PARAM_STR);
                    $stmt -> bindParam (32, $this -> impuestosVentas,                      PDO::PARAM_STR);
        
                    $stmt -> execute();
        
                } catch(Exception $e) {
                    echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
                } catch(PDOException $ex) {
                    echo "Se ha presentado un error al modificar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
                }
        }

        //METODO ELIMINAR
        function mdlEliminarProducto(){
            //INGRESAR LA CONSULTA (SP - QUERY)
            $sql = "call spEliminarProducto( ? )";

                try {
                    //INSTANCIAR LA BASE DE DATOS
                    $conexion = new Conexion();
                    $stmt = $conexion->conectar() -> prepare($sql);

                    //INGRESAR EL CODIGO QUE SE VA A ELIMINAR
                    $stmt -> bindParam (1, $this -> idProducto,     PDO::PARAM_INT);

                    $stmt -> execute();

                } catch(Exception $e) {
                    echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
                } catch(PDOException $ex) {
                    echo "Se ha presentado un error al modificar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
                }
        } 

        //METODO CONSULTA
        function mdlConcultaProducto(){
            //INGRESAR LA CONSULTA (SP - QUERY)
            $sql = "call spConsultaProducto( ? )";

                try {
                    //INSTANCIAR LA BASE DE DATOS
                    $conexion = new Conexion();
                    $stmt = $conexion->conectar() -> prepare($sql);

                    //VALORES QUE SE VAN A CONSULTAR
                    $stmt -> bindParam (1, $this -> idProducto,     PDO::PARAM_INT);

                    $stmt -> execute();
                    $resulset = $stmt; 

                } catch(Exception $e) {
                    echo "Se ha presentado un error en la clase Dao: ".$e->getMessage() . " El error se encuentra en la linea " . $e->getLine();
                } catch(PDOException $ex) {
                    echo "Se ha presentado un error al modificar los datos: ".$ex->getMessage() . " El error se encuentra en la linea " . $ex->getLine();
                }
           
                return $resulset;

        } 

    } 

    $objDtoProducto = new Producto();


    $objDaoProducto = new ProductoDao( $objDtoProducto );

    //$objDaoUsuario -> spInsertarProducto();
    //$objDaoUsuario -> spModificaProductoo();
    //$objDaoUsuario -> spEliminarProducto();
    //$objDaoUsuario -> spConultarProducto();
?>

