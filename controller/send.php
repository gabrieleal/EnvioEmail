<?php
    try{
        
        include "_conexion.php";

        $resp=$_POST["obj"];
        $resp=json_decode($resp,true);

        //subject es el Asunto del email
        $object = mail($resp["email"],$resp["asunto"],$resp["message"]);
        
        echo $object;

    }catch(Exception $e){
        echo $e->getMessage();
    }