<?php include 'inc/head.php'?>
<div class="row align-items-center">
    <img src="img/catAndDog.jpg">
    <form class="card-img-overlay row align-items-center text-center" action="index.php">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required><br>
            <label>
                <input type="checkbox" checked="unchecked" name="remember"> Remember me
            </label><br><br>
            <button type="submit">Login</button>
            <br>
            <a href="">Sign up</a>
        </div>
    </form>
</div>
<?php include 'inc/bottom.php'?>