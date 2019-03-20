<?php



if(isset($_POST['mailContacto'])) {



    $email_to = "contacto@veggiePoint.cl";

    $email_subject = "Contacto vía pagina web :  (".$_POST['mailContacto'.")"];



    function died($error) {

        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";

        echo "Detalle de los errores.<br /><br />";

        die();



    }



    $first_name = $_POST['nombreContacto']; // requerido

    $email_from = $_POST['mailContacto']; // requerido

    $telephone = $_POST['TelefonoContacto']; // no requerido 

    $rut = $_POST['rut'];

    $message = $_POST['textocontenido']; // requerido

    $error_message = "";//Linea numero 52;



 



//En esta parte se verifica que la dirección de correo sea válida 

   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';



 



  if(!preg_match($email_exp,$email_from)) {



    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';



  }



 

 



//Este es el cuerpo del mensaje tal y como llegará al correo

    $email_message = "Contenido del Mensaje.\n\n";



    function clean_string($string) {



      $bad = array("content-type","bcc:","to:","cc:","href");



      return str_replace($bad,"",$string);



    }



 



 



 

 $email_message .= "Nombre: ".clean_string($first_name)."\n";

 $email_message .= "Email: ".clean_string($email_from)."\n";

 $email_message .= "Teléfono: ".clean_string($telephone)."\n";

 $email_message .= "";

 $email_message .= "Mensaje: ".clean_string($message)."\n";



 



 

//Se crean los encabezados del correo



 $email_copy= "";
 $email_copy2= "";


$headers = 'From: '.$email_from."\r\n".



'Reply-To: '.$email_from."\r\n" .

'CC: '.$email_copy.",".$email_copy2."\r\n" .


'X-Mailer: PHP/' . phpversion();





@mail($email_to, $email_subject, $email_message, $headers);



 



?>



<!-- Mensaje de que fue enviado-->





<?php


echo "<script>location.href='../index.php';</script>";
//header('location: ../index.php');



}



?>