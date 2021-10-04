<?php

function connect($username,$password,$dbname)
{
    $con=mysqli_connect('localhost',$username,$password,$dbname,3306);
    if (!isset($con))
    {
        die("Hiba".mysqli_error($con));
    }
    else{
        return $con;
    }
    
}
?>