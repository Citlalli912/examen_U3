<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script>
        function changeButton() {
            var button = document.getElementById("registerButton");
            if (button.innerHTML === "Registrar") {
                button.innerHTML = "Modificar";
                button.href = "#modificar ";
                button.href = "modificar.php ";
            }
        }
    </script>
    <title>Mi galería de imágenes</title>
</head>
<body>

<header>
    <div class="header-content">
        <div class="header-left">
        </div>
        <div class="header-right">
            <h1>Mi galería de imágenes</h1>
        </div>
    </div>
</header>

<div class="buttons">
    <a href="upload.php" class="button">Subir imagen</a>
    <a href="#" id="registerButton" class="button" onclick="changeButton()">Registrar</a>
    <a href="cerrar_sesion.php" class="button">Cerrar sesión</a>
</div>
<br><br>

<div class="gallery">
    
    <?php
    $ruta_imagenes = "imagenes/"; 
    $imagenes = opendir($ruta_imagenes);
    $hay_imagenes = false;
    if($imagenes){
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                echo "<img src='$ruta_imagenes$imagen' class='small-image'>";
                $hay_imagenes = true;
            } 
        }
        closedir($imagenes);
    } else {
        echo "Error: No se pudo abrir la carpeta de imágenes";
    }
    if(!$hay_imagenes){
        echo "<p>No hay imágenes aún. Sube la primera.</p>";
    }
    ?>

</div>
</body>
</html>
