
<!DOCTYPE html>
<html>
<head>
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="asset/css/login.css">
    <link rel="shortcut icon" href="Mirota.png">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
</head>
<body id="login">
<img src="Mirota.png" id="logo-login" style="width: 500px; height 100px;">&nbsp;
<h1>SPK Pemilihan Pemasok Dengan Metode SAW</h1>

<div id="panel-login">
    <form id="formlogin" method="POST" action="ceklogin.php">
        <div class="group-input">
            <label for="username">Username :</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Username" id="username" name="username" >
        </div>
        <div class="group-input">
            <label for="password">Password :</label>
            <input type="password" class="form-custom" required autocomplete="off" placeholder="Password" id="password" name="password" >
        </div>
        <button class="btn btn-green btn-full"><i class="fa fa-arrow-alt-circle-right text-white"></i> Login</button>
    </form>
</div>

<!--<img src="asset/image/top-image.svg" id="hiasan">--> <br>
</body>
<script src="asset/js/jquery.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>
</html>