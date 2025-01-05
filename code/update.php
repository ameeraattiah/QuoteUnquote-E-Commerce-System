<?php
    include "db.php";
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
    if ($mysqli->connect_error) {
        echo "Connecting to MYSQL has failed." . $mysqli->connect_error;
        exit();
    }
    if (isset($_GET['email'])) {
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $PhoneNumber = $_GET['phonenumber'];
        $password = $_GET['password'];
        $zipcode = $_GET['zipcode'];
        $district = $_GET['district'];
        $street = $_GET['street'];
    }

    $query = "UPDATE customer SET 'firstname '=' '$firstname','lastname' '=' '$lastname','email' '=' '$email','phone_no' '=' '$PhoneNumber','password' '=' 'SHA1('$password')','zip' '=' '$zipcode','district' '=' '$district','street' '=' '$street'";
    $result = $mysqli->query($query);

    if ($result == TRUE) {
        echo "Record Updated Successfully";
    } else {
        echo "Error:" . $query . "<br>" . $mysqli->error;
    }

    $mysqli->close();

    ?>