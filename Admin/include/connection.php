<?php

$connection = new mysqli("localhost","root","","learning_plateform");

if (!$connection) {
    die(mysqli_error($connection));
}
// else
// {
//     echo "Connection Successfull";
// }

?>