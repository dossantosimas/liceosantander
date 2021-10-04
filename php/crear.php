<?php
    // establecer una conexion basica
    $conn_id = ftp_connect("ftp.liceosantander.edu.co");

    // iniciar sesion con nombre de usuario y contrasenha
    $login_result = ftp_login($conn_id, "liceosan", "dA%f?Q$#Z|_6");

    $nombre = htmlspecialchars($_GET["nombre"]);
    $dir = htmlspecialchars($_GET["dir"]);
    $dir = "/public_html/".$dir.$nombre;
    
    echo $dir;
    
    
    if (ftp_mkdir($conn_id, $dir)) {
        // Execute if directory created successfully
        echo " $dir Successfully created";
    }
    else {
        // Execute if fails to create directory
        echo "Error while creating $dir";
    }
     
    // // Closing ftp connection
    ftp_close($f_conn);
    
    
?>