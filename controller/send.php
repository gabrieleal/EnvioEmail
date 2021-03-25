<?php
    try{
        
        include "_conexion.php";

        $resp=$_POST["obj"];
       
        $headers="MIME-Version: 1-0 \r\n";
        //especificamos la codificacion de caracteres
        $headers.="Content-type: text/html; charset=iso-8859 \r\n";
        //especificamos el remitente del correo
        $headers.="From:Prueba example <perez.godoy.78@enginner.com>";
        
        //subject es el Asunto del email
        $object = mail($resp["email"],$resp["asunto"],$resp["message"],$headers);
       
        echo $object;

    }catch(Exception $e){
        echo $e->getMessage();
    }