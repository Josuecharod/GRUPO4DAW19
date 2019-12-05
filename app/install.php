<?php
include("../seguridad/conexion.inc.php");

    if ($con->query("CREATE DATABASE alimentos4bis2019") === TRUE) {
    printf("Se creó con éxtio la base de datos alimentos4bis2019.\n");
    }
    if ($con->query("USE alimentos4bis2019") === TRUE) {
    printf("Usando la base de datos alimentos4bis2019.\n");
    }
    include("../seguridad/sentencias.sql");
     if ($con->multi_query($sentenciasql) === TRUE) {
    printf("Script de creación de tablas en la base de datos alimentos4bis2019.\n");
    }
   

  $con->close();

?>