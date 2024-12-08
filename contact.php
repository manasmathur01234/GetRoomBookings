<?php include('/xampp/htdocs/Getroombookings/header.php') ?>
<?php include('/xampp/htdocs/Getroombookings/dbconnect.php') ?>

<div class="container my-5" style="max-width:50%">
    <h3 class="text-center my-4">Query</h3>
    <form action="contact-form.php" method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone number">
        </div>
        <div class="mb-3">
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('/xampp/htdocs/Getroombookings/footer.php') ?>