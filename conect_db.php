<?php
$servername = 'localhost';
$database = 'id21747836_llamadas';
$username = 'id21747836_admin';
$password = 'Ri16846677*';

// mysqli( host, usuario, contraseña, nombre_bd )
$mysqli = new mysqli($servername, $username, $password, $database);
$mysqli->set_charse('utf8');

//Muestra en la pagina si hay conexión

if ($mysqli){
    echo "<p style='
    display: table-cell;
    background: #cacaca00;
    bottom: 0;
    position: fixed;
    z-index: +1;
    vertical-align: middle;
    color: #5cbc04;
    opacity: 25%;
    '>0</p>";
}

?>