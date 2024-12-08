<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Signup</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/getroombookings/handlesignup.php" method="post">
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