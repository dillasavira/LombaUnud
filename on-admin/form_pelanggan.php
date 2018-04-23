<?php
include "../config.php" ;
if(isset($_POST['save']))
{
	$kd=$_POST['id_pelanggan'];
	$nama = $_POST['nama_depan'] ;
	$nama_b = $_POST['nama_belakang'] ;
	$alamat = $_POST['alamat'] ;
	$hp = $_POST['no_hp'] ;
	$email = $_POST['email'] ;
	mysqli_query($dbconnect,"insert into pelanggan values('$kd','$nama','$nama_b','$alamat','$hp','$email')");
    echo "
    <script>
    location.assign('index.php?page=list_pelanggan&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
	$kd=$_POST['id_pelanggan'];
	$nama = $_POST['nama_depan'] ;
	$nama_b = $_POST['nama_belakang'] ;
	$alamat = $_POST['alamat'] ;
	$hp = $_POST['no_hp'] ;
	$email = $_POST['email'] ;
    mysqli_query($dbconnect,"update pelanggan set nama_depan='$nama',nama_belakang='$nama_b',alamat='$alamat',no_hp='$hp',email='$email' where id_pelanggan='$kd'");
    echo "
    <script>
    location.assign('index.php?page=list_pelanggan&ps=true1');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";

if(isset($_GET['id_pelanggan']))
{
    $data=mysqli_fetch_row(mysqli_query($dbconnect,"select * from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'"));
}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Pelanggan</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="box-body">
				<div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">ID Pelanggan</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[0])?$data[0]:''; ?>" name="id_pelanggan" class="form-control" id="dua" placeholder="ID pelanggan">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama Depan</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nama_depan" class="form-control" id="dua" placeholder="Nama Depan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Nama Belakang</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="nama_belakang" class="form-control" id="tiga" placeholder="Nama Belakang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[3])?$data[3]:''; ?>" name="alamat" class="form-control" id="tiga" placeholder="Alamat">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">No Hp</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[4])?$data[4]:''; ?>" name="no_hp" class="form-control" id="tiga" placeholder="No HP">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[5])?$data[5]:''; ?>" name="email" class="form-control" id="tiga" placeholder="Email">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['id_pelanggan'])?'update':'save'; ?>">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
    