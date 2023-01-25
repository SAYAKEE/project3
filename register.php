<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        .wrap{
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <main class="wrap">
        <h1>Create new account</h1>
        <h3>Register Now!</h3>
        <hr>
        <form action="_actions/signup.php" method="post">
            <label for="namee" class="form-label"><b>User Name</b></label>
            <input type="text" id="namee" name="name" class="form-control">
            <br>
            <label for="mail" class="form-label"><b>Email</b></label>
            <input type="email" id="mail" name="email" class="form-control">
            <br>
            <label for="ph" class="form-label"><b>Phone Number</b></label>
            <input type="text" id="ph" name="phone" class="form-control">
            <br>
            <label for="pswd" class="form-label"><b>New Password</b></label>
            <input type="password" id="pswd" name="password" class="form-control">
            <br>
            <input type="submit" value="Sign Up" class="form-control">
        </form>
        <hr><br>
        <div class="text-center">
            <span class="alert alert-info">
                Already have an accounts! Please <a href="index.php" class="link">Log In</a> here...
            </span>
        </div>
    </main>
</body>
</html>