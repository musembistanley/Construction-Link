<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
</head>
<body>
    <div class="wrapper-login">
      <a href="index.php"><span class="icon-close"><ion-icon name="close-outline"></ion-icon></span></a>  
      

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                  <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
                  <input type="email" required>
                  <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                  </div>
                  <div class="remember-forget">
                    <label><input type="checkbox">
                    Remember me</label>
                    <a href="#">Forgot Password?</a>
                  </div>
                  <a href="homepage-builder.php"><button type="submit" class="btn">Login</a>
                  </button>
                  <div class="login-register">
                    <p>Don't have an account? <a 
                        href="register-builder.php" class="register-link"> Register</a>
                    </p>
                  </div>
            </form>
        </div> 
        
    </div>

<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

    
</body>
</html>