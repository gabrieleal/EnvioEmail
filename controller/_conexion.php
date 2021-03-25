<?php
try {

    echo $base = new PDO("mysql:host=localhost; dbname= envioEmail", "root", "");

} catch (Exception $e) {

    return "se a producido un error " . $e->getMessage();

} 