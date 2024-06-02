<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php 
             
             include("php/config.php");
             if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    if(password_verify($password, $row['Password'])) {
                        $_SESSION['username'] = $row['Username'];
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "<div class='message'>
                               <p>Błędny login lub hasło</p>
                             </div> <br>";
                        echo "<a href='login.php'><button class='btn'>Wroc</button>";
                    }
                } else {
                    echo "<div class='message'>
                           <p>Błędny login lub hasło</p>
                         </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Wroc</button>";
                }
            } else {
            ?>

            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Nie masz konta? <a href="register.php">Rejestracja</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>