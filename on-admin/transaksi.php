<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Transaksi/Penjualan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
	<form class="form-horizontal" role="form" action="laporan_tran.php" method="POST">
        <label class="col-sm-2">Tanggal Awal</label>
        <div class="col-sm-2">
      <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                  <input class="form-control" type="text" name="tgl_awal"  required>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
          <label class="col-sm-1">S/D</label>
          <label class="col-sm-2">Tanggal Akhir</label>
        <div class="col-sm-2">
      <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                  <input class="form-control" type="text" name="tgl_akhir"  required>
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
        </div>

      <div class="form-group">
        <div class  ="col-sm-4">
          <button type="submit" class="btn btn-primary" name="laporan"><span class="glyphicon glyphicon-save"></span> Cetak </button>
          <button type="reset" class="btn btn-warning" name="reset"><span class="glyphicon glyphicon-refresh"></span> Reset </button>
        </div>
      </div>

    </form>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
            </div>
        </div>
    </div>
</div>
         