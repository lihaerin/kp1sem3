<?include("config.php");?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> login </title>

        <!-- CSS -->
        <link rel="stylesheet" href="login.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="proses-login.php" method="POST">
                        <div class="field input-field">
                            <input type="username" name="username" placeholder="username">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>
        </section>

        <!-- JavaScript -->
        <script src="login.js"></script>
    </body>
</html>