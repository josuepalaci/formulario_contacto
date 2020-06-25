<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" value="<?PhP if(!$enviado && isset($nombre)) echo $nombre; ?>">
        
            <input type="text" name="correo" id="correo" class="form-control" placeholder="correo " value="<?PhP if(!$enviado && isset($correo)) echo $correo; ?>">
        
            <textarea name="mensaje" id="mensaje" cols="" rows="" placeholder="mensaje"><?PhP if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>
        
            <?PHP if(!empty($errores)): ?>
                <div class="alert error">
                    <?PHP echo $errores;?>
                </div>
            <?PHP elseif($enviado):  ?>
                <div class="alert success">
                    <p>Enviado correctamente.</p>
                </div>
            <?PHP endif               ?>

            <input type="submit" value="Enviar" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>