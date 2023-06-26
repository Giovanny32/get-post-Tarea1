<?php 
    $nombre = $_GET ['txtNombre'];
    //$nombre = $_post ['txtNombre'];
    $apellidos =  $_GET ['txtApellidos'];
    //$apellidos = $_post ['txtApellidos'];
    echo $nombre. "/" . $apellidos;

?>