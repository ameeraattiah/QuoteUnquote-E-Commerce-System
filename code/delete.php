<?php 
    include "db.php";
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
    if ($mysqli->connect_error) {
        echo "Connecting to MYSQL has failed." . $mysqli->connect_error;
        exit();
    }
    if (isset($_GET['email'])) {
        $user_email = $_GET['email'];
    }

    $query = "DELETE FROM customer WHERE 'email' = $user_email";
    $result = $mysqli->query($query);

    if ($result == TRUE){
        echo "Record Deleted Successfuly";
    }
    else {
        echo "Error:" . $query . "<br>" . $mysqli->error;
    }

    $mysqli->close();

?>