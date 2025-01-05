<?php
ini_set('display_errors', 1);



include('db.php');



// create the connection 
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);



if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


$query = 'SELECT * FROM product';
// FETCHING DATA FROM DATABASE
if ($stmnt = $mysqli->prepare($query)){
    $stmnt->execute();
    $result = $stmnt->get_result();

    // OUTPUT DATA OF EACH ROW
    while ($row = $result->fetch_row()) {
        $id = $row[0];
        $productname = $row[1];
        $productsize = $row[2];
        $productprice = $row[3];
        $productdesc = $row[4];

        //echo $row["email"] . " | Name: " . $row["firstname"] . " " . $row["lastname"] . " | PhoneNumber: " . $row["phone_no"] . " | Address: " . $row["street"] . " , " . $row["district"] . " , " . $row["zip"] . "<br>";
    }
} else {
    echo "0 results";
}

$mysqli->close();

?>