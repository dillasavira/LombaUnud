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
	<?php include'on-user/menu.php';?>
        <div id="box">
            <div id="main">
			<?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>
	</div>
            <form action="chek-login.php" method="POST">
            <div id="loginform">
                <h1>LOGIN</h1>
                <input type="text" placeholder="Username/Email" name="username"/><br>
                <input type="password" placeholder="Password" name="password"/><br>
                <input type="submit" class="btn btn-success btn-block" name="login" value="Login"></div>
				<p style="font-size:15px; color:#696969; font-family:arial">Lupa Password ?</p>

				
            </div>
			</form>
			<form action="" method="POST">
            <div id="signupform">
                <h1>REGISTRASI</h1>
                <input type="text" name="nama_depan" placeholder="Nama Depan"/><br>
                <input type="text" name="nama_belakang" placeholder="Nama Belakang"/><br>
                <input type="text" name="alamat" placeholder="Alamat"/><br>
                <input type="text" name="no_hp" placeholder="No HP"/><br>
                <input type="email" name="email" placeholder="Email"/><br>
                <input type="text" name="username" placeholder="Username"/><br>
                <input type="password" name="password" placeholder="Password"/><br>
                <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar">            </div>
            </form>
            <div id="login_msg">Mempunyai Akun ?</div>
            <div id="signup_msg">Belum Mempunyai Akun ?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">REGISTRASI</button>
            
            
        </div>
    </body>
	
</html>