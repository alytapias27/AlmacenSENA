<?php

    class Producto{

        /* ATRIBUTOS */
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

        /* SETTERS */
        public function serIdProducto( $idProducto ){
            $this -> idProducto = $idProducto;
        }
        public function setNombreProducto( $nombreProducto ){
            $this -> nombreProducto = $nombreProducto;
        }
        public function setUnidadMedida( $unidadMedida ){
            $this -> unidadMedida = $unidadMedida;
        }
        public function setCantidad( $cantidad ){
            $this -> cantidad = $cantidad;
        }
        public function setFoto( $foto ){
            $this -> foto = $foto;
        }
        public function setControlCantidadInventario( $controlCantidadInventario ){
            $this -> controlCantidadInventario = $controlCantidadInventario;
        }
        public function setParaConsumo( $paraConsumo ){
            $this -> paraConsumo = $paraConsumo;
        }
        public function setMercanciaVenta( $mercanciaVenta ){
            $this -> mercanciaVenta = $mercanciaVenta;
        }
        public function setEsServicio( $esServicio ){
            $this -> esServicio = $esServicio;
        }
        public function setIncluirConteoFisico( $incluirConteoFisico ){
            $this -> incluirConteoFisico = $incluirConteoFisico;
        }
        public function setProductoActivo( $productoActivo ){
            $this -> productoActivo = $productoActivo;
        }
        public function setDatosFabricante( $datosFabricante ){
            $this -> datosFabricante = $datosFabricante;
        }
        public function setReferencias( $referencias ){
            $this -> referencias = $referencias;
        }
        public function setMedidas( $medidas){
            $this -> medidas = $medidas;
        }
        public function setPresentacion( $presentacion ){
            $this -> presenacion = $presentacion;
        }
        public function setUbicacionFisica( $ubicacionFisica ){
            $this -> ubicacionFisica = $ubicacionFisica;
        }
        public function setProductoEquivalente( $productoEquivalente ){
            $this -> productoEquivalente = $productoEquivalente;
        }
        public function setCostoUnitarioPromedio( $costoUnitarioPromedio){
            $this -> costoUnitarioPromedio = $costoUnitarioPromedio;
        }
        public function setCostoTotalpromedio( $costoTotalpromedio ){
            $this -> costoTotalpromedio = $costoTotalpromedio;
        }
        public function setStockMaximo( $stockMaximo ){
            $this -> stockMaximo = $stockMaximo;
        }
        public function setStockMinimo( $stockMinimo ){
            $this -> stockMinimo = $stockMinimo;
        }
        public function setTiempoReposicion( $tiempoReposicion){
            $this -> tiempoReposicion = $tiempoReposicion;
        }
        public function setCuentaInventarios( $cuentaInventarios){
            $this -> cuentaInventarios = $cuentaInventarios;
        }
        public function setCuentaContableIngresos( $cuentaContableIngresos ){
            $this -> cuentaContableIngresos = $cuentaContableIngresos;
        }
        public function setCuentaContableIngresosAjustes( $cuentaContableIngresosAjustes ){
            $this -> cuentaContableIngresosAjustes = $cuentaContableIngresosAjustes;
        }
        public function setCuentaContableDevolucionVentas( $cuentaContableDevolucionVentas ){
            $this -> cuentaContableDevolucionVentas = $cuentaContableDevolucionVentas;
        }
        public function setCuentaContableCostos( $cuentaContableCostos ){
            $this -> cuentaContableCostos = $cuentaContableCostos;
        }
        public function setCuentaContableDevolucionCompras( $cuentaContableDevolucionCompras ){
            $this -> cuentaContableDevolucionCompras = $cuentaContableDevolucionCompras;
        }
        public function setCuentaContableGastos( $cuentaContableGastos ){
            $this -> cuentaContableGastos = $cuentaContableGastos;
        }
        public function setCuentaContableGastosAjustes( $cuentaContableGastosAjustes ){
            $this -> cuentaContableGastosAjustes = $cuentaContableGastosAjustes;
        }
        public function setImpuestosCompras( $impuestosCompras ){
            $this -> impuestosCompras = $impuestosCompras;
        }
        public function setImpuestosVentas( $impuestosVentas){
            $this -> impuestosVentas = $impuestosVentas;
        }

        /* GETTERS */
        public function getIdProducto(){
            return $this -> idProducto;
        }
        public function getNombreProducto(){
            return $this -> nombreProducto;
        }
        public function getUnidadMedida(){
            return $this -> unidadMedida;
        }
        public function getCantidad(){
            return $this -> cantidad;
        }
        public function getFoto(){
            return $this -> foto;
        }
        public function getControlCantidadInventario(){
            return $this -> controlCantidadInventario;
        }
        public function getParaConsumo(){
            return $this -> paraConsumo;
        }
        public function getMercanciaVenta(){
            return $this -> mercanciaVenta;
        }
        public function getEsServicio(){
            return $this -> esServicio;
        }
        public function getIncluirConteoFisico(){
            return $this -> incluirConteoFisico;
        }
        public function getProductoActivo(){
            return $this -> productoActivo;
        }
        public function getDatosFabricante(){
            return $this -> datosFabricante;
        }
        public function getReferencias(){
            return $this -> referencias;
        }
        public function getMedidas(){
            return $this -> medidas;
        }
        public function getPresentacion(){
            return $this -> presenacion;
        }
        public function getUbicacionFisica(){
            return $this -> ubicacionFisica;
        }
        public function getProductoEquivalente(){
            return $this -> productoEquivalente;
        }
        public function getCostoUnitarioPromedio(){
            return $this -> costoUnitarioPromedio;
        }
        public function getCostoTotalpromedio(){
            return $this -> costoTotalpromedio;
        }
        public function getStockMaximo(){
            return $this -> stockMaximo;
        }
        public function getStockMinimo(){
            return $this -> stockMinimo;
        }
        public function getTiempoReposicion(){
            return $this -> tiempoReposicion;
        }
        public function getCuentaInventarios(){
            return $this -> cuentaInventarios;
        }
        public function getCuentaContableIngresos(){
            return $this -> cuentaContableIngresos;
        }
        public function getCuentaContableIngresosAjustes(){
            return $this -> cuentaContableIngresosAjustes;
        }
        public function getCuentaContableDevolucionVentas(){
            return $this -> cuentaContableDevolucionVentas;
        }
        public function getCuentaContableCostos(){
            return $this -> cuentaContableCostos;
        }
        public function getCuentaContableDevolucionCompras(){
            return $this -> cuentaContableDevolucionCompras;
        }
        public function getCuentaContableGastos(){
            return $this -> cuentaContableGastos;
        }
        public function getCuentaContableGastosAjustes(){
            return $this -> cuentaContableGastosAjustes;
        }
        public function getImpuestosCompras(){
            return $this -> impuestosCompras;
        }
        public function getImpuestosVentas(){
            return $this -> impuestosVentas;
        }

    }


?>