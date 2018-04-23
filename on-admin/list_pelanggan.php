<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
            <th><center>No</center></th>
            <th><center>Nama Depan</center></th>
            <th><center>Nama Belakang</center></th>
            <th><center>Alamat</center></th>
            <th><center>No HP</center></th>
            <th><center>Email</center></th>
            <th><center>Pilih Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
					
            include "../config.php" ;
			
                        $no=0;
					$qu=mysqli_query($dbconnect,"select * from pelanggan order by id_pelanggan");
                     while($has=mysqli_fetch_row($qu))
                     {
						$no++;
                        echo "
                        <tr>
                        <td>$no</td>
                        <td>$has[1]</td>
                        <td>$has[2]</td>
                        <td>$has[3]</td>
                        <td>$has[4]</td>
                        <td>$has[5]</td>
                        <td style='text-align:center'>
                        <a href='index.php?page=pelanggan&id_pelanggan=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
						<a href='hapus.php?data=list_pelanggan&del=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Delete'><button onClick=return confirm('Apakah Anda yakin akan menghapus?$has[0];')' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                        </td>
                      </tr>
                        "; 
                     }
                     ?>
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
         
          </div><!-- /.row -->