<?php
    // establecer una conexion basica
    $conn_id = ftp_connect("ftp.liceosantander.edu.co");

    // iniciar sesion con nombre de usuario y contrasenha
    $login_result = ftp_login($conn_id, "liceosan", "dA%f?Q$#Z|_6");

    
    $dir = htmlspecialchars($_GET["dir"]);
    $dir = "/public_html/".$dir;
    
    echo $dir;
    
    
    if (ftp_delete($conn_id, $dir)) {
        // Execute if directory created successfully
        echo " $dir Se elimino correctamente";
    }
    else {
        // Execute if fails to create directory
        echo "Error al eliminar $dir";
    }
     
    // // Closing ftp connection
    ftp_close($f_conn);
    
    
?>