<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php

    include("header.php");


    // if (isset($_SESSION["email"])) {
    //     header("Location:index.php");
    //     exit;
    // }

    $email = "";
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (empty($email) || empty($password)) {
            $error = "Email and Password are required";
        } else {
            include("database.php");
            $statement = $connection->prepare("SELECT id,first_name,last_name,phone,password,created_at FROM login WHERE email=?");
            $statement->bind_param("s", $email);

            $statement->execute();

            $statement->bind_result($id, $first_name, $last_name, $phone, $address, $stored_password, $created_at);

            if ($statement->fetch()) {
                if (password_verify($password, $stored_password)) {

                    $_SESSION["id"] = $id;
                    $_SESSION["first_name"] = $first_name;
                    $_SESSION["last_name"] = $last_name;
                    $_SESSION["email"] = $email;
                    $_SESSION["phone"] = $phone;
                    $_SESSION["address"] = $address;
                    $_SESSION["created_at"] = $created_at;

                    header("Location:index.php");
                    exit;
                }
            }
            $statement->close();
            $error = "Email or Password invalid";
        }
    }
    ?>
    <div class="container py-3">
        <div class="mx-auto border shadow p-3" style="width:400px">
            <h2 class="text-center mb-3">Login</h2>
            <hr />

            <?php
            if (!empty($error)) { ?>

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong><?= $error ?></strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


            <?php }
            ?>
            <form action=" <?php $PHP_SELF ?>">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" value="<?= $email ?>" name="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="row mb-3">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                    <div class="col d-grid">
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    include("footer.php");
    ?>
</body>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>