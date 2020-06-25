<?PHP
    $enviado='';
    $errores='';

if (isset($_POST['submit'])) {
    
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    if(!empty($nombre)){
        $nombre=trim($nombre);
        $nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
    } else{
        $errores.='por favor ingresa un nombre <br/>';
    }

    if(!empty($correo)){
        $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
            $errores.='por favor ingresa un correo valido <br/>';
        }
    } else{
        $errores.='por favor ingresa un correo <br/>';
    }

    if(!empty($mensaje)){
        $mensaje=htmlspecialchars($mensaje);
        $mensaje=trim($mensaje);
        $mensaje=stripcslashes($mensaje);
    } else{
        $errores.='por favor ingresa un mensaje <br/>';
    }

    if (!$errores) {
        $enviar_a='josuepalaci123@hotmail.com';
        $asunto='Correo enviado desde un form';
        $mensaje_preparado="De: $nombre\n";
        $mensaje_preparado.="Correo: $correo \n";
        $mensaje_preparado.="Mensaje: ".$mensaje;
        
        // mail($enviar_a,$asunto,$mensaje_preparado);
        $enviado='true';
    }




}

require 'index.view.php';
?>