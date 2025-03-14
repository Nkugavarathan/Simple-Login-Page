<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <?php include("header.php");

    $first_name = "";
    $last_name = "";
    $email = "";
    $phone = "";
    $address = "";

    // error msg
    $first_name_error = "";
    $last_name_error = "";
    $email_error = "";
    $phone_error = "";
    $address_error = "";
    $password_error = "";
    $confirm_password_error = "";

    $error = false;

    $success_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        //validate firstname
        // if (empty($first_name)) {
        //     $first_name_error = "First Name is requird";
        //     $error = true;
        // }
        if (empty($first_name)) {
            $first_name_error = "First Name is required";
        } else {
            $success_message = "First Name entered successfully!"; // Set success message
        }
        //validate lastname
        if (empty($last_name)) {
            $last_name_error = "Last Name is requird";
            $error = true;
        }
        //email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Email format is not valid";
            $error = true;
        }
        // validate phone
        // define a regex for phone format

        if (!preg_match("/^(\+?\d{1,3})?[-.\s]?\d{7,12}$/", $phone)) {
            $phone_error = "Phone format is not valid";
            $error = true;
        }

        //validate password
        if (strlen($password) < 6) {
            $password_error = "Password must have at least 6 charactors";
            $error = true;
        }
        if ($confirm_password != $password) {
            $confirm_password_error = "Password and Confirm password do not match";
            $error = true;
        }
    }
    ?>

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-6 mx-auto border shadow p-4">
                <h2 class="text-center mb-3">Register Here</h2>

                <form action="<?php $_PHP_SELF ?>" method="post">
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">First Name*</label>
                        <div class="col-sm-8">
                            <!-- PHP's <?= $first_name ?> is shorthand for <?php echo $first_name; ?>. It outputs the value of the $first_name variable into the 
                             value attribute of the input field.
                           
                             When a user submits the form, the value they enter for "First Name" is stored in the $first_name variable (via $_POST["first_name"]).

If the form is reloaded (e.g., due to validation errors or another reason), this allows the previously entered value to persist, so the user doesn't need to re-enter it. 
                            -->
                            <input type="text" class="form-control" name="first_name" value="<?= $first_name ?>">
                            <span class="text-danger"> <?= $first_name_error ?> </span>
                            <span class="text-success" style="color:green"> <?= $success_message ?> </span>
                        </div>
                    </div>

                    <div class=" row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Last Name*</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="last_name" value="<?= $last_name ?>">
                            <span class="text-danger"> <?= $last_name_error ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Email*</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" value="<?= $email ?>">
                            <span class="text-danger"> <?= $email_error ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Phone*</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" value="<?= $phone ?>">
                            <span class="text-danger"> <?= $phone_error ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="address" value="<?= $address ?>">
                            <span class="text-danger"> <?= $address_error ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Password*</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" value="">
                            <span class="text-danger"> <?= $password_error ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Confirm Password*</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="confirm_password" value="">
                            <span class="text-danger"><?= $confirm_password_error ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="offset-sm-4 col-sm-4 d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-sm-4 d-grid">
                            <a href="./index.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>