<?php
require_once("navbarLogin.php");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Glassmorphism Login and Registration Form</title>
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <!-- Login Form -->
                <form id="login-form" action="includes/login.inc.php" method="post">
                    <h2>Login</h2>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Fill in all fields!</div>";
                        } else if ($_GET["error"] == "invalidemail") {
                            echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Please enter a valid email address.</div>";
                        } else if ($_GET["error"] == "stmtfailed") {
                            echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Oops! Something went wrong. Please try again later.</div>";
                        } else if ($_GET["error"] == "none") {
                            echo "<div class='successMessage'><i class='fas fa-check-circle'></i> You have successfully signed up!</div>";
                        } else if ($_GET["error"] == "wronglogin") {
                            echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Incorrect login information. Please try again.</div>";
                        }
                    }
                    ?>
                    <div class="input-field">
                        <input type="text" name="email" required>
                        <label>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="pwd" required>
                        <label>Enter your password</label>
                    </div>
                    <div class="forget">
                        <div class="checkbox-wrapper-13">
                            <input type="checkbox" id="c1-13">
                            <p>Remember me</p>
                        </div>

                        <a href="forgotpwd.php">Forgot password?</a>
                    </div>
                    <button type="submit" name="submit">Log In</button>
                    <p class="message">Not Registered?<a href="#">Register</a></p>
                </form>

            <!-- Registration Form -->
            <form id="registration-form" action="includes/register.inc.php" method="post">
                <h2>Register</h2>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Fill in all fields!</div>";
                    } else if ($_GET["error"] == "invalidemail") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Please enter a valid email address.</div>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Oops! Something went wrong. Please try again later.</div>";
                    } else if ($_GET["error"] == "none") {
                        echo "<div class='successMessage'><i class='fas fa-check-circle'></i> You have successfully signed up!</div>";
                    } else if ($_GET["error"] == "wronglogin") {
                        echo "<div class='errorMessage'><i class='fas fa-exclamation-circle'></i> Incorrect login information. Please try again.</div>";
                    }
                }
                ?>
                <div class="input-field">
                    <input type="text" name="name" required>
                    <label>Enter your name</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email" required>
                    <label>Enter your email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="pwd" required>
                    <label>Enter your password</label>
                </div>
                <button type="submit" name="submit">Register</button>
                <p class="message">Already Registered?<a href="#">Login</a></p>
            </form>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>

    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <script>
        $('button a').click(function() {
            $('').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>
</body>

</html>