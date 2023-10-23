<?php
    echo "Imagen: \n";
    // Obtener ubicación temporal de la imagen guardada en el servidor
    echo $_FILES['imagen']['tmp_name'];
    echo "File get contents: \n";
    // Convertir imagen temporal en un tipo blob para guardar en la base de datos
    $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
    // Descodificar blob y mostrar imagen
    echo '<img src="data:image/jpeg;base64,'. base64_encode($imagen) . ' "/>';

    // Mostrar imágenes
    $registros = mysqli_query($conn, "SELECT * FROM productos");

    while($reg = mysqli_fetch_array($registros)) {
         echo '<img src="data:image/jpeg;base64,'. base64_encode($reg['Imagen']) . ' "/>';
    }

?>

