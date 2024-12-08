<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getroombookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include('/xampp/htdocs/Getroombookings/dbconnect.php');
    session_start();

    echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="width:200px"><img src="assets/img/logo.png" class="w-100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><strong
                                class="text-sm">Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong class="text-sm">By GRB|Portfolio</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong class="text-sm">Our solutions</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong class="text-sm">Career</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong class="text-sm">Plan Signup</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong class="text-sm">Host App</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong class="text-sm">Short Rental</strong></a>
                    </li>

                </ul>';

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo 'Welcome ' . $_SESSION['Email'] . '
        <a href="/getroombookings/logout.php" class="btn btn-outline-success mx-2">i</a>
                    <a class="nav-link border rounded py-2 px-3" href="#" style="background-color: #E63E26;"><strong
                            class="text-white text-sm">Contact</strong></a>';
    } else {
        echo '<div class="contact d-flex">
                    <a class="nav-link p-2 pb-0" href="#" data-bs-toggle="modal"
                        data-bs-target="#log"><strong>Login</strong></a>
                    <a class="nav-link p-2 pb-0" href="#" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><strong>Signup</strong></a>
                    <a class="nav-link border rounded py-2 px-3" href="#" style="background-color: #E63E26;"><strong
                            class="text-white text-sm">Contact</strong></a>
                </div>';
    }
    echo '</div>
        </div>
    </nav>';
    ?>

    <?php
    include('/xampp/htdocs/Getroombookings/signup.php');
    include('/xampp/htdocs/Getroombookings/loginmodal.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>