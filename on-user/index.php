<?php include'menu.php';?>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/background.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">TANAMAN</h1>
			<h3>Complete Tanaman</h3>
			<a href="login_registrasi.php" class="btn btn-outline-secondary" style="font-size:25px; color:white;border-color:white">Registrasi</a>
			<a href="login_registrasi.php" class="btn btn-outline-secondary" style="font-size:25px; color:white;border-color:white">Login</a>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/background2.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">BIBIT POHON</h1>
			<h3>Melayani 24 Jam</h3>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/background3.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">TANAMAN HIAS</h1>
			<h3>Melayani 24 Jam</h3>
		</div>
	</div>
</div>
</div>

<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Best Seller</h1>
	</div>
	<hr class="display-4" >
</div>
</div>
<div class="container-fluid padding">
<div class="row padding">
			<?php 	
            include "../config.php" ;			
         			$qu=mysqli_query($dbconnect,"select gambar,nama_tanaman,harga from tanaman where stok between 50 and 100");
                     while($has=mysqli_fetch_row($qu))
                     {
                        echo "
						<div class='col-md-4'>
						<div class='card'>
                        <img class='card-img-top' src='../images/$has[0]' width='200' height='350' />
						<div class='card-body'>
						<h4 class='card-title'>$has[1]</h4>
						<p class='card-text'>Rp.$has[2]</p>
						<a href='keranjang_belanja.php' class='btn btn-outline-secondary'>Masukkan ke Keranjang</a>
						</div>
						</div>
						</div>
                        "; 
                     }
                     ?>
						</div>
						</div>


<!--- Welcome Section -->
<div class="container-fuild padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Superiority</h1>
	</div>
	<hr class="display-4" >
	<div class="display-4">
		<p class="lead">Superiority complex adalah sebuah gangguan dalam jiwa seseorang, yang dilatarbelakangi oleh keinginan untuk mencapai kesempurnaan di dalam setiap aspek kehidupan orang tersebut. </p>
	</div>
</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<img src="img/s1.png" width="200" height="200" >
		<h3>Garansi Uang Kembali</h3>
		<p>Uang Anda dapat kembali 100% jika barang tidak sampai ke tangan</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<img src="img/s2.png" width="200" height="200">
		<h3>Tanaman Terbaik</h3>
		<p>Tanaman yang disediakan memiliki kualitas yang baik dan bagus</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<img src="img/s3.png" width="200" height="200">
		<h3>Melayani 24 Jam</h3>
		<p>Orderan dapat dilakukan kapanpun dimana dan waktu yang bebas</p>
	</div>
</div>
<hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
<div class=" row padding">
	<div class="col-md-12 col-lg-6">
		<h2>Jika Anda Berbelanja...</h2>
		<p>Harga lebih berani.. Sebagian besar toko online menawarkan harga yang jauh lebih rendah dibandingkan dengan toko offline. Alasannya, saat ini sudah banyak orang yang mengetahui bahwa barang-barang yang dijual di internet cenderung lebih murah karena tidak dikenakan pajak bangunan seperti toko offline.</p>
		<p>Waktu fleksibel.. Toko online memungkinkan Anda untuk berbelanja barang tanpa harus banyak menyita waktu. Belanja bisa dilakukan di waktu senggang ataupun di sela-sela jam sibuk.</p>
		<p>Tidak Terbatas.. Toko online memberikan hak khusus untuk calon pembelinya, yaitu dengan cara memberikan waktu belanja kapanpun. Toko online tidak pernah tutup dalam waktu 7x24 jam. Namun, biasanya pengiriman barang dilakukan sesuai dengan jam kerja, dan peraturan setiap toko online.</p>
		<br>
		<a href="#" class="btn btn-primary">Pelajari</a>
	</div>
	<div class="col-lg-6">
		<img src="img/desk.jpg" class="img-fluid">
	</div>
</div>
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
<div class="fixed-wrap">
	<div id="fixed"></div>
</div>
</figure>

<!--- Emoji Section -->

 
<!--- Two Column Section -->
<div class="container-fluid padding">
<div class=" row padding">
	<div class="col-md-12 col-lg-6">
		<h2>Tentang Kami...</h2>
		<p>Harga lebih berani.. Sebagian besar toko online menawarkan harga yang jauh lebih rendah dibandingkan dengan toko offline. Alasannya, saat ini sudah banyak orang yang mengetahui bahwa barang-barang yang dijual di internet cenderung lebih murah karena tidak dikenakan pajak bangunan seperti toko offline.</p>
		<p>Waktu fleksibel.. Toko online memungkinkan Anda untuk berbelanja barang tanpa harus banyak menyita waktu. Belanja bisa dilakukan di waktu senggang ataupun di sela-sela jam sibuk.</p>
		<p>Tidak Terbatas.. Toko online memberikan hak khusus untuk calon pembelinya, yaitu dengan cara memberikan waktu belanja kapanpun. Toko online tidak pernah tutup dalam waktu 7x24 jam. Namun, biasanya pengiriman barang dilakukan sesuai dengan jam kerja, dan peraturan setiap toko online.</p>
		<br>
	</div>
	<div class="col-lg-6">
		<img src="img/boostrap2.jpg" class="img-fluid">
	</div>
</div>
</div>
<?php include'footer.php';?>
</body>
</html>













