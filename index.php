<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
    include("header.php"); ?>

    <div style="background-color:#08618d; height: 100vh; overflow: hidden;">
        <div class="container text-white">
            <div class="row align-items-center g-4 h-100">
                <div class="col-md-6">
                    <h1 class="mb-4 display-2"><strong>Best Shop of Electronics</strong></h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, quisquam voluptas eveniet tenetur modi fugit.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="./photos/iphone.JPG" alt="Hero Section Image" class="img-fluid"
                        style="max-height: 100vh; max-width: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>

    <?php

    // include("database.php");  24:26
    include("footer.php"); ?>

</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>