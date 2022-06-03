<?php

//función de conexion  al BD

function conexion()
{
    $con=mysqli_connect("localhost","root","","mydb");
    mysqli_set_charset($con, 'utf8');
    return $con;
}



?>