<?php include'menu_p.php';?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Tanaman Obat</h2>
									<?php 	
            include "../config.php" ;			
         			$qu=mysqli_query($dbconnect,"select gambar,nama_tanaman,harga from tanaman where jenis_tanaman ='obat'");
                     while($has=mysqli_fetch_row($qu))
                     {
                        echo "
						<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
										<div class='productinfo text-center'>
											<img  src='../images/$has[0]' />
											<h4>$has[1]</h4>
											<p>Rp.$has[2]</p>
											<a href='keranjang_belanja.php' class='btn btn-primary'>Tambahkan</a>
										</div>
										
								</div>

							</div>
						</div>
						";
						}
                     ?>
					 </div>
					
					
	</section>

<?php include'footer.php';?>