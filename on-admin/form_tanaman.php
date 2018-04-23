<?php
include "../config.php" ;
if(isset($_POST['save']))
{
		$kd = $_POST['kd_tanaman'];
		$nama = $_POST['nama_tanaman'];
		$gambar = $_POST['gambar'] ;
		$kategori = $_POST['kategori'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];
		
		
	mysqli_query($dbconnect,"INSERT INTO tanaman VALUES ('$kd','$nama','$gambar','$kategori','$stok','$harga')");
    echo "
    <script>
    location.assign('index.php?page=list_tanaman&ps=true1');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
	$kd=$_POST['kd_tanaman'];
	$nama = $_POST['nama_tanaman'] ;
	$gambar = $_POST['gambar'] ;
	$jenis = $_POST['kategori'] ;
	$jml = $_POST['stok'] ;
	$harga = $_POST['harga'] ;
    mysqli_query($dbconnect,"update tanaman set nama_tanaman='$nama',gambar='$gambar',jenis_tanaman='$jenis',stok='$jml',harga='$harga' where kd_tanaman='$kd'");
    echo "
    <script>
    location.assign('index.php?page=list_tanaman&ps=true2');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";

if(isset($_GET['kd_tanaman']))
{
    $data=mysqli_fetch_row(mysqli_query($dbconnect,"select * from tanaman where kd_tanaman='".$_GET['kd_tanaman']."'"));
}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tanaman</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="box-body">
				<div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Kode Tanaman</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[0])?$data[0]:''; ?>" name="kd_tanaman" class="form-control"  placeholder="ID tanaman">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama Tanaman</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nama_tanaman" class="form-control" id="dua" placeholder="Nama Tanaman">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" required value="<?php echo isset($data[2])?$data[2]:''; ?>" accept="image/*" name="gambar" class="form-control" id="tiga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
						<select name="kategori" >
							<option value="Bunga">Bunga</option>
							<option value="Daun">Daun</option>
							<option value="Pohon">Pohon</option>
							<option value="Sayur">Sayur</option>
							<option value="Hama">Hama</option>
							<option value="Aquascape">Aquascape</option>
							<option value="Herbal">Herbal</option>
							<option value="Buah">Buah</option>
							</select>                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[4])?$data[4]:''; ?>" name="stok" class="form-control" id="tiga" placeholder="Stok">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[5])?$data[5]:''; ?>" name="harga" class="form-control" id="tiga" placeholder="Harga">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['kd_tanaman'])?'update':'save'; ?>">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
    