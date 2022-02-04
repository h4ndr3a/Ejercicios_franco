
<?php
     
     class Vehiculo {
     //Atributos
     public $placa;
     public $marca;
     public $modelo;
     public $kilometraje;
     //public $fecha_registro = date("Y-m-d");
     
     //Constructor
     
     public function construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje){

     }
          $this->placa = $vrplaca;
          $this->marca = $vrmarca;
          $this->modelo = $vrmodelo;
          $this->kilometraje = $vrkilometraje;
     }

     public function getVehiculo(){
          $arrayVehiculo = $Array(
          'placa: ' => $this->placa,
          'marca: ' => $this->marca,
          );
          return $arrayVehiculo;
     }
     
     
     //Metodos




?>