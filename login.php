<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="..\css\style_index.css">
</head>
<body>
<div class="row align-items-center">
    <img src="img\catAndDog.jpg">
<form class="card-img-overlay row align-items-center text-center" action="index.php">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required><br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required><br>
        <label>
            <input type="checkbox" checked="unchecked" name="remember"> Remember me
        </label><br><br>
        <button type="submit">Login</button><br>
        <a href="">Sign up</a>
    </div>
</form>
</div>
</body>
</html>