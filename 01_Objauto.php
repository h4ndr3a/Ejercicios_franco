<?php
    require_once("01_Claseauto.php");

    $objVehiculo = new Vehiculo("MCN-930","MAZDA",2020,45500);
    $objVehiculo->getVehiculo();

    print_r('<pre>');
    print_r($objVehiculo);
    print_r('</pre>');

    echo "<br>";
    echo $objVehiculo->Marca;

    
    ?>