
<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table table-striped table-bordered">
    <tr>
        <th align="left" scope="col">Gambar</th>
        <th align="left" scope="col">Nama </th>
        <th align="right" scope="col">Harga</th>
        <th align="right" scope="col">Qty</th>
        <th align="right" scope="col">Jumlah Harga</th>
        <th align="right" scope="col" width="20%">Aksi</th>
    </tr>
    <?php
	require_once('config.php');
    $total = 0;
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val ) {
            $query = mysqli_query($dbconnect,"select * from tanaman where kd_tanaman = '$key'");
            $rs = mysqli_fetch_array($query);

            $jumlah_harga = $rs['harga'] * $val;
            $total += $jumlah_harga;
            ?>
            <tr>
                <?php 
                $a=$rs['kd_tanaman'];
                $b=$rs['nama_tanaman'];
                $_SESSION['a'] = $a;
                $_SESSION['b'] = $b;
                ?>
                <td><?php echo $a ?></td>
                <td><?php echo $b ?></td>
                <td align="right"><?php echo number_format($rs['harga']); ?></td>
                <td align="right"><?php echo number_format($val); ?></td>
                <td align="right"><?php echo number_format($jumlah_harga); ?></td>
                <td align="center">
                    <?php
                        if($val == $rs['stok']){
                            ?>
                            <a class="glyphicon glyphicon-plus" href="#"> + </a>
                            <?php
                        }else{
                    ?>
                    <a class="glyphicon glyphicon-plus"  href="aksi_keranjang_belanja.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=transaksi.php"> </a><?php } ?>  
                    <a class="glyphicon glyphicon-minus" href="aksi_keranjang_belanja.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=transaksi.php"> </a>
                    <a class="glyphicon glyphicon-trash" href="aksi_keranjang_belanja.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=transaksi.php"></a></td>
            </tr>
            <?php
            mysqli_free_result($query);
        }
    }
    ?>
    <tr>
        <td colspan="4">Total Bayar</td>
        <td align="right"><?php echo number_format($total); ?></td>
        <td align="right"><a class="glyphicon glyphicon-refresh"  href="aksi_keranjang_belanja.php?act=clear&amp;ref=transaksi.php"> Reset</a></td>
    </tr>

 </table>

 
</select>      


<!--<input type="submit" value="Apply" />-->

</div>

<!--- Footer -->
<?php include'footer.php';?>