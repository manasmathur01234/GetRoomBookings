<div class="modal fade" id="log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/getroombookings/handlelogin.php" method="post">
                    <div class="mb-3">
                        <input type="email" class="form-control border-0 border-bottom rounded-0" id="loginemail" name="loginemail"
                            aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control border-0 border-bottom rounded-0" id="loginpassword" name="loginpassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>