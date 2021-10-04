<?php
    // establecer una conexion basica
    $conn_id = ftp_connect("ftp.liceosantander.edu.co");

    // iniciar sesion con nombre de usuario y contrasenha
    $login_result = ftp_login($conn_id, "liceosan", "dA%f?Q$#Z|_6");

    $dir = htmlspecialchars($_GET["dir"]);
    $dir = "/public_html/".$dir;
    
    $localFilePath  = $_FILES["file2"]["tmp_name"];
    //$remoteFilePath = 'public_html/documentos/' . $_FILES["file2"]["name"];
    $remoteFilePath = $dir . $_FILES["file2"]["name"];
    
    // try to upload file
    if(ftp_put($conn_id, $remoteFilePath, $localFilePath, FTP_BINARY)){
        echo "File transfer successful - $localFilePath - $remoteFilePath";
    }else{
        echo "There was an error while uploading $localFilePath";
    }
    
    // close the connection
    ftp_close($conn_id);
?>