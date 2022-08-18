<?php 
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'vsga');

        $conn =mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        //CHECK CONNECTION 
        if ($conn == false ) {
            die ('ERROR: koneksi ke database gagal. ' . mysqli_connect_error());
        } else{
            echo "Sukses Terhubung ke Database";
        }

?>