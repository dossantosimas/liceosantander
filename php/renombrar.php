<?php
    // establecer una conexion basica
    $conn_id = ftp_connect("ftp.liceosantander.edu.co");

    // iniciar sesion con nombre de usuario y contrasenha
    $login_result = ftp_login($conn_id, "liceosan", "dA%f?Q$#Z|_6");

    
    $old_file = htmlspecialchars($_GET["old"]);
    $old_file = "/public_html/".$old_file;
    
    $new_file = htmlspecialchars($_GET["new"]);
    $new_file = "/public_html/".$new_file;
    
    echo $dir;
    
    
    if (ftp_rename($conn_id, $old_file, $new_file)) {
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