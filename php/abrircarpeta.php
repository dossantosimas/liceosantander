<?php
    //echo "<script>console.log('esto viene del php')</script>";
    // echo "se ejecuto prueba";
    
    $dir = htmlspecialchars($_GET["dir"]);
    $dir = "/public_html/".$dir;
    //echo $dir;
    
    // establecer una conexion basica
    $conn_id = ftp_connect("ftp.liceosantander.edu.co");

    // iniciar sesion con nombre de usuario y contrasenha
    $login_result = ftp_login($conn_id, "liceosan", "dA%f?Q$#Z|_6");

    // Obtener los archivos contenidos en el directorio actual
    // $contents = ftp_nlist($conn_id, "/public_html/img/carrusel");
    $contents = ftp_nlist($conn_id, $dir);
    
    // output $contents
    echo var_dump($contents);
    // //echo var_dump($vacio);

?>