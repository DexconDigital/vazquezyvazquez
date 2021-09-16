
<html>
    <head>
        <meta http-equiv="refresh" content="2;url=index.html">
    </head>
<?php
$to      = 'Arriendos@inmobiliariavasquezyvasquez.com';
 $subject=$_POST['asunto'];   
$nombre=$_POST['nombrecompleto'];
$telefono=$_POST['telfijo'];
$celular=$_POST['telmovil'];
$email=$_POST['email']; 
$ciudad=$_POST['ciudad'];
$mensage=$_POST['message'];
$message= "ESTO ES UN MENSAJE ENVIADO DESDE LA PAGINA WEB DE VASQUEZ Y VASQUEZ<br><br><br> NOMBRE DE LA PERSONA: ".$nombre. "<br>TELEFONOS DE CONTACTO" .$telefono. "<br><br>CELULAR:  ".$celular. "<br><br>CORREO: ".$email."<br><br> 
            CELULAR: ".$celular."<br><br>CIUDAD: ".$ciudad."<br><br> LA PERSONA QUE SE CONTACTO DEJO ESTE MENSAJE PARA USTED:  ".$mensage.""; 
         
         $header = "From:vasquezyvasquez@vasquez.com \r\n";
         $header .= "Cc:vasquezyvasquez@vasquez.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Enviando Mensaje...";
            header('Location:index.html');
         }else {
            echo "Message could not be sent...";
             header('Location:index.html');
         }
      ?>
</html>