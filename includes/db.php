<?php 

$connection = mysqli_connect('localhost', 'root', '', 'cms');

if($connection) {
    
} else {
    echo mysqli_error();
}

?>