<html>

<head>
    <title>"Quote Unquote"</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">

    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid" style="background-color: #F6EEEF">

            <a class="navbar-brand" href="#"><img src="name.png" width="300" alt="Quote Unquote"></a>
            <!-- ARIA options are for ACCESSIBILITY  -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span> <img src="icon.png" width="50" alt="icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 " class="navigation">

                    <li class="nav-item">
                        <a class="nav-link active" style="color: #979B88; font-size: large;" aria-current="page" href="Home.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" style="color: #979B88; font-size: large;" href="Cart.html">Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" style="color: #979B88; font-size: large;" href="Contact.html">Contact Us</a>
                    </li>

                    <li class="nav-item btn-group dropdown ">

                        <button type="button" class="btn dropdown-toggle" style="color:#979B88; float: right; "
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="p-3 " href="http://localhost/test/quoteunquote/logIn.php">Log In</a>
                            </li>
                            <li>
                                <a class="p-3" href="http://localhost/test/quoteunquote/signUp.php">Sign Up</a>
                            </li>
                        </ul> </ul>

                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php

    ini_set('display_errors', 1);
    include('db.php');

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);


    if ($mysqli->connect_error) {
        echo "Connecting to MYSQL has failed." . $mysqli->connect_error;
        exit();
    }
    //echo "hello";
    if (isset($_POST['email'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $PhoneNumber = $_POST['phonenumber'];
        $password = $_POST['password'];
        $zipcode = $_POST['zipcode'];
        $district = $_POST['district'];
        $street = $_POST['street'];

        $query = "INSERT INTO customer(firstname,lastname,email,phone_no,password,zip,district,street) VALUES ('$firstname','$lastname','$email','$PhoneNumber',SHA1('$password'),'$zipcode','$district','$street')";

        if ($mysqli->query($query) == TRUE) {
            echo "You've signed up successfully.";
        } else {
            echo "Error: " . $query . "<br>" . $mysqli->error;
        }

    }

    $mysqli->close();

    ?>

<h4 class="display-4" style="text-align: center; color: #979B88;">Sign Up</h4>
    <p style="color: #8183B8;"> Sign up if you're a new user!</p>

    <form method='POST' action='signUp.php' class="row g-3" style="color: #999AC6;">
        <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" name="firstname">
            <label for="floatingInput">First Name</label>
        </div>

        <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" name="lastname">
            <label for="floatingInput">Last Name</label>
        </div>
       <div class="form-floating mb-3 col-md-12">
            <input type="email" class="form-control" name="email">
            <label for="floatingInput">Email</label>
        </div>
        
        <div class="form-floating mb-3 col-md-12">
            <input type="number" class="form-control" name="phonenumber">
            <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating mb-3 col-md-12">
            <input type="password" class="form-control" name="password">
            <label for="floatingInput">Password</label>
        </div>
        <div class="form-floating mb-3 col-md-3">
            <input type="number" class="form-control" name="zipcode">
            <label for="floatingInput">ZIP code</label>
        </div>

        <div class="form-floating mb-3 col-md-4">
            <input type="text" class="form-control" name="district">
            <label for="floatingInput">District name</label>
        </div>

        <div class="form-floating mb-3 col-md-5">
            <input type="text" class="form-control" name="street">
            <label for="floatingInput">Street name</label>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-dark btn-md" name="create" id="btn1" type="submit" value="Sign Up" style="background: #C1C6AE; color: rgb(248, 248, 248);">Sign
                Up</button>
        </div>

    </form>
    </div>
    </div>

    <!-- Footer -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-top pb-3 mb-3">
            <li class="nav-item"><a href="Home.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="Cart.html" class="nav-link px-2 text-muted">Cart</a></li>
            <li class="nav-item"><a href="Contact.html" class="nav-link px-2 text-muted">Contact Us</a></li>
            <li class="nav-item"><a href="http://localhost/test/quoteunquote/logIn.php" class="nav-link px-2 text-muted">Log In</a></li>
            <li class="nav-item"><a href="http://localhost/test/quoteunquote/signUp.php" class="nav-link px-2 text-muted">Sign Up</a></li>
        </ul>
    </footer>



</body>