<?php
include "../config.php" ;
if(isset($_POST['save']))
{
	$kd=$_POST['id_kurir'];
	$nama = $_POST['nama_kurir'] ;
	$alamat = $_POST['alamat'] ;
	$hp = $_POST['no_tlp'] ;
	mysqli_query($dbconnect,"insert into kurir values('$kd','$nama','$alamat','$hp')");
    echo "
    <script>
    location.assign('index.php?page=list_kurir&ps=true1');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
	$kd=$_POST['id_kurir'];
	$nama = $_POST['nama_kurir'] ;
	$alamat = $_POST['alamat'] ;
	$hp = $_POST['no_tlp'] ;    
	mysqli_query($dbconnect,"update kurir set nama_kurir='$nama',alamat='$alamat',no_tlp='$hp' where id_kurir='$kd'");
    echo "
    <script>
    location.assign('index.php?page=list_kurir&ps=true2');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Tersimpan</div>";
elseif(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";

if(isset($_GET['id_kurir']))
{
    $data=mysqli_fetch_row(mysqli_query($dbconnect,"select * from kurir where id_kurir='".$_GET['id_kurir']."'"));
}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input kurir</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="box-body">
				<div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">ID kurir</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[0])?$data[0]:''; ?>" name="id_kurir" class="form-control" id="dua" placeholder="ID kurir">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nama_kurir" class="form-control" id="dua" placeholder="Nama Depan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="alamat" class="form-control" id="tiga" placeholder="Alamat">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">No Hp</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[3])?$data[3]:''; ?>" name="no_tlp" class="form-control" id="tiga" placeholder="No HP">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['id_kurir'])?'update':'save'; ?>">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
    