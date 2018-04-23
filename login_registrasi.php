<html>
    <head>
        <link href="on-user/css_login_regis.css" rel="stylesheet"/>
        <script src="on-user/jquery-1.10.2.min.js"></script>
        <script src="on-user/jquery_login_regis.js"></script>
		<link href="on-user/style.css" rel="stylesheet">
	<link href="on-user/css/bootstrap.min.css" rel="stylesheet">
	<link href="on-user/js/bootstrap.min.js" rel="stylesheet">
	<link href="on-user/popper.min.js" rel="stylesheet">
    </head>
    <body>
	<?php include'menu.php';?>
        <div id="box">
            <div id="main"></div>
            <form action="chek-login.php" method="POST">
            <div id="loginform">
                <h1>LOGIN</h1>
                <input type="text" placeholder="Username"/><br>
                <input type="password" placeholder="Password"/><br>
                <button type="submit">Login</button>
				<p style="font-size:15px; color:#696969; font-family:arial">Lupa Password ?</p>		
            </div>
			</form>
            <div id="signupform">
                <h1>REGISTRASI</h1>
                <input type="text" placeholder="Nama Lengkap"/><br>
                <input type="email" placeholder="Email"/><br>
                <input type="password" placeholder="Password"/><br>
                <button type="submit">Registrasi</button>
            </div>
            
            <div id="login_msg">Mempunyai Akun ?</div>
            <div id="signup_msg">Belum Mempunyai Akun ?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">REGISTRASI</button>
            
