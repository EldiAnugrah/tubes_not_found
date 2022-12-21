<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../aset/img/palet.png">
</head>

<body>
    <img class="wave2" src="../../img/wave2.svg">
    <img class="wave" src="../../img/wave.svg">
    <div class="container">
        <div class="img">
            <img src="../../img/LogoNotFound.png" alt="">
        </div>
        <div class="login-content">
            <form action="">
                <h2 class="title" style="color:#ff9900">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5> <span style="color:#ff9900";> Username</span></h5>
                        <input type="text" class="input" name="username" autofocus autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5><span style="color:#ff9900";>Password</span></h5>
                        <input type="password" class="input" name="password" required>
                    </div>
                </div>
                
                <input type="submit" class="btn" value="Login" name="login">
                <a href="registrasi.php">Belum punya akun? registrasi sekarang</a>
                <h1><a href="ladmin.php">Login as Admin</a></h1>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/login.js"></script>
</body>

</html>
