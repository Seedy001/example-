<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php

            include("php/config.php");

            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['Email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
                echo "Email: " . $email . "<br>";
                echo "Password: " . $password . "<br>";

                $query = mysqli_prepare($con, "SELECT id, Username, Email, Permanent_code, Password FROM users WHERE Email = ?");
                mysqli_stmt_bind_param($query, "s", $email);
                mysqli_stmt_execute($query);
                $result = mysqli_stmt_get_result($query);
                if ($row = mysqli_fetch_assoc($result)) {
                    var_dump($row);
                    // Utilisateur trouvé dans la base de données
                    if ($password) {
                        // Mot de passe correct
                        $_SESSION["valid"] = $row["Email"];
                        $_SESSION["username"] = $row["Username"];
                        $_SESSION["permanent"] = $row["Permanent"];
                        $_SESSION["id"] = $row["id"];
                        header("Location: home.php");
                        exit();
                    } else {
                        // Mot de passe incorrect
                        echo "<div class='message'><p> Wrong Username or Password </p></div>";
                    }
                }
            }
            ?>

            <!-- Reste du code inchangé -->

            <!-- if(isset($_SESSION["valid"])){
                header("Location: home.php");
                exit();
            } -->

            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Email">Email </label>
                    <input type="text" name="Email" id="Email" autocomplete="off" required>

                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>

                </div>
                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="Login" required>

                </div>
                <div class="links">
                    don't have account? <a href="register.php">Sign Up Now</a>

                </div>
            </form>
        </div>
    </div>
</body>

</html>