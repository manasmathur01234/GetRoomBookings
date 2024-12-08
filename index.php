<?php include('/xampp/htdocs/Getroombookings/header.php') ?>
<?php include('/xampp/htdocs/Getroombookings/dbconnect.php') ?>

<div class="card">
    <img src="assets/img/background.avif" class="card-img opacity-50" alt="...">
    <div class="card-img-overlay text-white text-center top-50">
        <h1 class="card-title">BY GRB SERVICES</h1>
        <h4 class="card-text">Unlock the Full Potential of Your Property with<br> Our All-Inclusive Packages!</h4>
    </div>
</div>

<div class="container text-center my-5">
    <h3>Plans & Pricing</h3>
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-4 col-sm-12 border rounded-5 p-4 me-4 shadow plan"><a href=""
                class="text-decoration-none text-black">
                <h5 class="planname">Platinum</h5>
                <ul class="text-start">
                    <li><strong>10</strong> OTA managed</li>
                    <li>Extranet management</li>
                    <li><strong>Dedicated</strong> Resource type</li>
                    <li><strong>24*7</strong> Hyper Care</li>
                    <li>Dynamic Pricing</li>
                    <li><strong>Weekly</strong> Pick up & Revenue Reports</li>
                    <li>Google Listing</li>
                    <li><strong>Invoice Management</strong></li>
                    <li><strong>Competition Price Check</strong></li>
                    <li><strong>OTA Review & replies management</strong></li>
                </ul>
                <h5 class="my-5 commercial">14% Commercials</h5>
            </a>

        </div>
        <div class="col-md-4 col-sm-12 border rounded-5 p-4 me-4 mw-25 shadow plan"><a href="#"
                class="text-decoration-none text-black">
                <h5 class="planname">Gold</h5>
                <ul class="text-start">
                    <li><strong>5</strong> OTA managed</li>
                    <li>Extranet management</li>
                    <li><strong>Shared</strong> Resource type</li>
                    <li><strong>12*5</strong> Hyper Care</li>
                    <li>Dynamic Pricing</li>
                    <li><strong>Monthly</strong> Pick up & Revenue Reports</li>
                    <li><strong>Google Listing</strong></li>
                </ul>
                <h5 class="my-5 commercial">12% Commercials</h5>
            </a>
        </div>
        <?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<div class="col-md-4 col-sm-12 border rounded-5 p-4 shadow plan"><a href="/getroombookings/contact.php"
                class="text-decoration-none text-black">
                <h5 class="planname">Silver</h5>
                <ul class="text-start">
                    <li><strong>3</strong> OTA managed</li>
                    <li>Extranet management</li>
                    <li><strong>Dedicated</strong> Resource type</li>
                    <li><strong>8*5</strong> Hyper Care</li>
                    <li>Dynamic Pricing</li>
                    <li><strong>On Request</strong> Pick up & Revenue Reports</li>
                </ul>
                <h5 class="my-5 commercial">10% Commercials</h5>
            </a>
        </div>';
        }
        else {
            echo '<div class="col-md-4 col-sm-12 border rounded-5 p-4 shadow plan"><a href="" data-bs-toggle="modal"
                        data-bs-target="#log"
                class="text-decoration-none text-black">
                <h5 class="planname">Silver</h5>
                <ul class="text-start">
                    <li><strong>3</strong> OTA managed</li>
                    <li>Extranet management</li>
                    <li><strong>Dedicated</strong> Resource type</li>
                    <li><strong>8*5</strong> Hyper Care</li>
                    <li>Dynamic Pricing</li>
                    <li><strong>On Request</strong> Pick up & Revenue Reports</li>
                </ul>
                <h5 class="my-5 commercial">10% Commercials</h5>
            </a>
        </div>';
        }
        ?>
        
    </div>
</div>

<?php include('/xampp/htdocs/Getroombookings/footer.php') ?>