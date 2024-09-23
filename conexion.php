<?php
    $host = 'sql106.infinityfree.com';
    $user = 'if0_37364981';
    $passwd = 'G2tCV2BGCoLSKik';
    $dbname = 'if0_37364981_prueba3';

    $conn = new mysqli($host, $user, $passwd, $dbname);
    if ($conn->connect_error) 
        die("Conection Error: $conn->connect_error");
?>