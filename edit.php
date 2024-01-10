<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Change Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">ESTI</a></p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"  autocomplete="off" required>

                </div>

                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email" autocomplete="off" required>

                </div>               
                <div class="field input">
                   <input type="submit" class="btn"name="submit" value="Update" autocomplete="off"  required>
                    
                </div>
                <div class="links">
                    already a member? <a href="index.php">Sign In</a>

                </div>
            </form>
        </div>
    </div>
</body>
</html>