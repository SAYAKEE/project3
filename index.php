<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        .wrap{
            width: 100%;
            max-width: 350px;
            margin: 30px auto;
        }
    </style>
</head>
<body>
    <main class="wrap">
        <h1>Log In</h1>
        <hr>
        <form action="_actions/login.php">
            <label for="mail" class="form-label"><b>EMAIL</b></label>
            <input type="text" class="form-control">
            <br>
            <label for="pswd" class="form-label"><b>PASSWORD</b></label>
            <input type="password" class="form-control">
            <br>
            <input type="submit" class="btn btn-warning w-100" value="Log In">
        </form>
    </main>
</body>
</html>