<?php
   $conn = mysqli_connect(
         'docker-mysql-test.c0xrg7cdscmw.us-east-1.rds.amazonaws.com',
         'user',
         'goqudejr15',
         'TEST',
         '3306'
    );
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
    $sql = "SELECT VERSION()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["VERSION()"]);
?>