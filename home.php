<?php
session_start();
if (!isset($_SESSION["valid"])) {
    header("Location: index.php");
    exit();
}
include("php/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">ESTI</a></p>
        </div>

        <div class="right-links">

            <?php
            $id = $_SESSION['id'];
            $result = mysqli_query($con, "SELECT*FROM users WHERE id=$id");

            $row = mysqli_fetch_assoc($result);
            $res_Uname = $row["Username"];
            $res_Email = $row["Email"];
            $res_permanent_code = $row["Permanent_code"];
            $res_id = $row["id"];

            echo " <a href='edit.php?Id=$res_id'>Change Profile</a>"
            ?>
            <a href="php/logout.php"> <button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b> <?php echo $res_Uname ?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email ?></b></p>
                </div>
                <div class="box">
                    <p>And you are<b> student of the UAMM </b>.</p>
                </div>
            </div>
        </div>


    </main>
</body>

</html>