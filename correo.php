<?php
    if(isset($_POST["enviar"])){
        if(!empty($_POST["txtNombre"]) && !empty($_POST["txtCorreo"]) && !empty($_POST["txtCorreoDestinatario"]) && !empty($_POST["txtAsunto"])) {
             $nombre=$_POST["txtNombre"];
             $correoUsuario=$_POST["txtCorreo"];
             $correoDestinatario= $_POST["txtCorreoDestinatario"];
             $asunto=$_POST["txtAsunto"];
             $mensaje=$_POST["txtMensaje"]; 
             
             $contenido = "Nombre: ". $nombre. "\nCorreo:" . $correoUsuario. "\nAsunto". $asunto . "\nMensaje:" . $mensaje;
             $mail = mail($correoDestinatario, $asunto, $contenido);
             if($mail){
                 echo "<h4>enviado exitosamente</h4>";
             }else{echo "no llego el mensaje";}
        }
    }   
?>

