<?php

$connection = new mysqli("localhost","root","","college");
if ($connection) {
    die(mysqli_error($connection));
}


?>