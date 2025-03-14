<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto  mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                </ul>
                <li class="nav-item dropdown me-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="./profile.php">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="./logout.php">Logout</a>
                        </li>
                    </ul>
                </li>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="./register.php" class="btn btn-outline-primary me-2">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="btn btn-outline-primary me-2">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="background-color:#08618d">
        <div class="container text-white py-5">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h1 class="mb-4 display-2"><strong>Best Shop of Electronics</strong></h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, quisquam voluptas eveniet tenetur modi fugit.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    dfd
                    <img src="" alt="" class="img-fluid" alt="img">
                </div>
            </div>
        </div>
    </div>

    <footer class="py-5 mb-0" style="background-color:#eef0f2">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="d-block text-muter">&copy; 2024-<?= date("Y") ?></small>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>