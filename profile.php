<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    // session_start(); session in php has
    include("header.php");

    // Ensure the user is logged in
    if (!isset($_SESSION["email"])) {
        header("Location: login.php");
        exit;
    }
    ?>

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-6 mx-auto border shadow p-3">
                <h2 class="text-center mb-4">Profile</h2>
                <hr />
                <div class="row mb-3">
                    <div class="col-sm-4">First Name : </div>
                    <div class="col-sm-8"> <?= isset($_SESSION["first_name"]) ? $_SESSION["first_name"] : "N/A" ?> </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Last Name : </div>
                    <div class="col-sm-8"> <?= isset($_SESSION["last_name"]) ? $_SESSION["last_name"] : "N/A" ?> </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Email : </div>
                    <div class="col-sm-8"> <?= isset($_SESSION["email"]) ? $_SESSION["email"] : "N/A" ?> </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Phone : </div>
                    <div class="col-sm-8"> <?= isset($_SESSION["phone"]) ? $_SESSION["phone"] : "N/A" ?> </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Address : </div>
                    <div class="col-sm-8"> <?= isset($_SESSION["address"]) ? $_SESSION["address"] : "N/A" ?> </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">Registered At : </div>
                    <div class="col-sm-8"> <?= isset($_SESSION["created_at"]) ? $_SESSION["created_at"] : "N/A" ?> </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>