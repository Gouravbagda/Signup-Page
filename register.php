<?php
$nameError = "";
$emailError = "";
$passwordError = "";
$phoneError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    if (empty($name) or strlen($name) <= 10) {
        $conditon = true;
    }
    if (empty($email) or strpos($email, '@') === false or strpos($email, '.') === false) {
        $conditon = true;
    }
    if (empty($password) or strlen($password) <= 6) {
        $conditon = true;
    }
    if (empty($phone) or strlen($phone) <= 10) {
        $conditon = true;
    }
}
if (isset($conditon)) {
    $nameError = "pleace enter the name(at least 10 characters)";
    $emailError = "Please enter a valid email";
    $passwordError = "Please enter a valid password (at least 6 characters)";
    $phoneError = "Please enter a valid phone (at least 10 characters)";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_form_title">
                        <h2>Register form</h2>
                    </div>
                </div>
            </div>
            <form action="register-db.php" method="post">
                <div class="row">

                <div class="col-lg-6 col-md-6">
                       
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <label for="name">NAME :-</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                            <span class="error"><?php if (isset($conditon)) echo $nameError; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <label for="email">EMAIL :-</label>
                            <input type="text" name="email" placeholder="Email" class="form-control">
                            <span class="error"><?php if (isset($conditon)) echo $emailError; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <label for="password">PASSWORD :-</label>
                            <input type="text" name="password" placeholder="Password" class="form-control">
                            <span class="error"><?php if (isset($conditon)) echo $passwordError; ?></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <label for="phone">PHONE NUMBER :-</label>
                            <input type="text" name="mobile_number" placeholder="phone" class="form-control">
                            <span class="error"><?php if (isset($conditon)) echo $phoneError; ?>
                            </span>
                        </div>
                    </div>
                   
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    
</body>
</html>