<?php
// Start the session at the beginning
if (isset($_SESSION["email"])) {
    header("Location:index.php");
    exit;
}


include("header.php");
include("database.php");

$email = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $error = "Email and Password are required";
    } else {
        $statement = $connection->prepare("SELECT id, first_name, last_name, phone, address, password, created_at FROM login WHERE email=?");
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

                header("Location: index.php");
                exit;
            }
        }
        $statement->close();
        $error = "Email or Password invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <div class="mx-auto border shadow p-3" style="width:400px">
            <h2 class="text-center mb-3">Login</h2>
            <hr />
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong><?= $error ?></strong>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                        <a href="register.php" class="btn btn-danger">Register</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php include("footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>