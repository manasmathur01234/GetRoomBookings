<div class="text-center bg-secondary py-3">
    <h6 class="text-white mb-0"><img src="assets/img/Secure Payment_edited.avif" style="width: 5%">We are enabled
        with Secure Payment</h6>
</div>
<div class="text-center bg-success-subtle py-3">
        <div class="container">
            <div class="d-flex justify-content-between mx-5">
                <img src="assets/img/mastercard.avif" style="width: auto;height: 40px;">
                <img src="assets/img/upi.avif" style="width: auto;height: 40px;">
                <img src="assets/img/razorpay.avif" style="width: auto;height: 40px;">
                <img src="assets/img/visa.avif" style="width: auto;height: 40px;">
            </div>
        </div>
    </div>

<div class="card-footer bg-dark">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4">
                <img class="w-75" src="assets/img/footer logo.avif">
                <div class="content my-5">
                    <h6 class="text-white">© 2024 GetRoomBookings.</h6>
                    <h6 class="text-white">All rights reserved.</h6>
                    
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="text-white mb-0">Get in touch</h2>
                <div class="content my-5">
                    <h6 class="text-white">E-Commerce Management Centre
                        GM-IT Park,
                        Business Suite#G 11-G13
                        Sector-142, Noida, Uttar Pradesh, 201305, India</h6>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="text-white mb-0">Learn more</h2>
                <div class="content my-5">
                    <h6 class="text-white">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none text-white">Privacy Policy</a></li>
                            <li><a href="#" class="text-decoration-none text-white">Terms & Conditions</a></li>
                            <li><a href="#" class="text-decoration-none text-white">Refund Policy</a></li>
                            <li><a href="#" class="text-decoration-none text-white">FAQ's</a></li>
                        </ul>
                    </h6>
                </div>

            </div>
        </div>
        <div class="row text-center">
            <h6><a class="text-decoration-none text-white"
                    href="mailto:contact@getroombookings.com">contact@getroombookings.com</a></h6>
            <h6><a class="text-decoration-none text-white" href="tel:91-9310651733">+91-9310651733</a></h6>
            <h6 class="text-center text-white mt-4 mb-5">GetRoomBookings is a subsidiary of PRAGATISHEEL ELEMENTO
                INDUSTRIES PRIVATE LIMITED</h6>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="handlesignup.php" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control border-0 border-bottom rounded-0" id="property"
                                name="property" placeholder="Property name">
                        </div>

                        <div class="col">
                            <select class="form-select" id="hotel" name="hotel">
                                <option selected>Hotel</option>
                                <option value="1">Homestay</option>
                                <option value="2">Luxury Camp</option>
                                <option value="3">Farmstay</option>
                                <option value="3">Villa</option>
                                <option value="3">VillaApart Hotel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control border-0 border-bottom rounded-0" id="fullname"
                                name="fullname" placeholder="Full Name">
                        </div>
                        <div class="col">
                            <div class="d-flex">
                                <select class="form-select" aria-label="Default select example"
                                    style="width: 80px;">
                                    <option selected>IN +91</option>
                                    <option value="1">IN +91</option>
                                    <option value="2">IN +91</option>
                                    <option value="3">IN +91</option>
                                </select>
                                <input type="number" class="form-control border-0 border-bottom rounded-0"
                                    id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="email" class="form-control border-0 border-bottom rounded-0" id="email"
                                name="email" placeholder="Email">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control border-0 border-bottom rounded-0"
                                id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="password" class="form-control border-0 border-bottom rounded-0"
                                id="cpassword" name="cpassword" placeholder="Confirm Password">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control border-0 border-bottom rounded-0" id="city"
                                name="city" placeholder="City">
                        </div>

                    </div>
                    <button class="btn btn-secondary btn-sm">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="handlelogin.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginemail" name="loginemail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="loginpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginpassword" name="loginpassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>