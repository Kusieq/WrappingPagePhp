<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Rejestracja</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");

         if(isset($_POST['submit'])){
             $username = mysqli_real_escape_string($con, $_POST['username']);
             $email = mysqli_real_escape_string($con, $_POST['email']);
             $password = mysqli_real_escape_string($con, $_POST['password']);
         
             // Sprawdzanie długości loginu i hasła
             if(strlen($username) < 6){
                 echo "<div class='message'>
                         <p>Login musi mieć więcej niż 6 znaków</p>
                       </div> <br>";
                 echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
             } elseif(strlen($password) < 6){
                 echo "<div class='message'>
                         <p>Hasło musi mieć więcej niż 6 znaków</p>
                       </div> <br>";
                 echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
             } else {
                 $hashed_password = password_hash($password, PASSWORD_BCRYPT);
         
                 // Sprawdzanie, czy email jest unikalny
                 $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
         
                 if(mysqli_num_rows($verify_query) != 0){
                     echo "<div class='message'>
                             <p>Ten email został już użyty</p>
                           </div> <br>";
                     echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                 } else {
                     mysqli_query($con, "INSERT INTO users(Username, Email, Password) VALUES('$username', '$email', '$hashed_password')") or die("Error Occurred");
         
                     echo "<div class='messageCorrect'>
                             <p>Rejestracja pomyślna</p>
                           </div> <br>";
                     echo "<a href='login.php'><button class='btn'>Login Now</button>";
                 }
             }
         } else {
             // Opcjonalnie: obsługa przypadku, gdy formularz nie został przesłany
         
        ?>

            <header>Rejestracja</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Login</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Haslo</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
