<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.isconscout.com/release/v4.0.0/css">
    <link rel="icon" href="../Project/assets/images/Loupi.png" >
    <link rel="stylesheet" href="../fbi.css">
</head>
<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo"><img src="../assets/images/LOGOO-removebg-preview.png" alt="" style="width: 158px;"></a>
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="Our shop.html">Our Shop</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="Project(js)/index.html"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="gold" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg></a></li>
                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            
            <div class="form login_form">
                <form action="">
                    <h2>Login</h2>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required >
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" placeholder="Enter your password" required >
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>
                    <button class="button">Login Now</button>

                    <div class="login_signup"></div>
                    Don't have an account? <a href="#" id="signup">Signup</a>
                </form>
            </div>
            <!-- Signup form -->

            <div class="form signup_form">
                <form action="#">
                    <h2>Signup</h2>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required >
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="text" placeholder="Enter your username" required >
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    
                    <div class="input_box">
                        <input type="password" placeholder="Create password" required >
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Confirm password" required >
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <button class="button">Signup Now</button>

                    <div class="login_signup"></div>
                    Already have an account? <a href="#" id="login">Login</a>
                </form>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>