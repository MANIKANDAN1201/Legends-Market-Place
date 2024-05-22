<?php
session_start();
include "dbconnect.php"; 

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login_username']) && isset($_POST['login_password'])) {
        $login_username = $_POST['login_username'];
        $login_password = $_POST['login_password'];

        $sql = "SELECT * FROM users11 WHERE username = ? AND password = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $login_username, $login_password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Successful login
            $_SESSION['user11'] = $login_username; // Updated session variable
            header("Location: index.php" ); // Redirect to the same page
            exit(); // Ensure no further code is executed after the redirect
        } else {
            // Incorrect username or password
            $message = "Invalid username or password.";
        }

        $stmt->close();
    }

    if (isset($_POST['register_username']) && isset($_POST['register_password']) && isset($_POST['register_email'])) {
        $register_username = $_POST['register_username'];
        $register_password = $_POST['register_password'];
        $register_email = $_POST['register_email'];

        $sql = "INSERT INTO users11 (username, password, email) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $register_username, $register_password, $register_email);

        if ($stmt->execute()) {
            // Successful registration
            $message = "Registration successful!";
        } else {
            // Registration error
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/login.css" rel="stylesheet">
    <title>SignIn&SignUp</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <?php if ($message != ''): ?>
                    <div class="message"><?php echo $message; ?></div>
                <?php endif; ?>
                <form action="" method="post" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="username" name="login_username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" name="login_password" required />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <form action="" method="post" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="register_username" name="register_username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="register_email" name="register_email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="register_password" name="register_password" required />
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Become a part of the growing economy with us!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Exciting investing opportunities and innovative projects await!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener('click', () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener('click', () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
</body>
</html>
