<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
    
</head>
<body>
    <body>
        <div class="wrapper-register">
          <a href="index.php"><span class="icon-close"><ion-icon name="close-outline"></ion-icon></span></a> 
          
    
            <div class="form-box login">
               <h2>Register</h2>
                <form action="register_builderphp.php" method="POST">
                    <div class="input-box">
                      <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                      <input type="text" id="first_name" name="first_name"required>
                      <label for="first_name">First Name</label>
                    </div>

                    <div class="input-box">
                      <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                      <input type="text"id="last_name" name="last_name" required>
                      <label for="last_name">Last Name</label>
                    </div> 

                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                      </div>
                    

                      <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                      </div>

                      <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Confirm Password</label>
                      </div>
    
                      <div class="remember-forget">
                        <label><input type="checkbox">
                        I agree to terms and condition</label>
                      </div>
                      <button type="submit" class="btn">Register
                      </button>
                      <div class="login-register">
                        <p>Already have an account? <a 
                            href="login-builder.php" class="login-link"> Login</a>
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