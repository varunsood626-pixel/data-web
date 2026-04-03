<?php

function connect_db() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stage_ind_dcg_live";



    //   $username = "root";

    // $password = "";

    // $dbname = "datar_db";



    $conn = mysqli_connect($servername, $username, $password, $dbname);



    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());

    }



    return $conn;

}





function select_where($conn, $table, $column, $value , $order="") {

    $value = mysqli_real_escape_string($conn, $value);

    if($order){

         $sql = "SELECT * FROM `$table` WHERE `$column` = '$value' $order ";

    }else{

         $sql = "SELECT * FROM `$table` WHERE `$column` = '$value'  ";

    }

   

    $result = mysqli_query($conn, $sql);



    $data = [];

    if ($result && mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $data[] = $row;

        }

    }



    return $data;

}





?>

