<?php
include "../config.php" ;
require('fpdf17/fpdf.php');
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(4,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
//$pdf->Image('../logo/malasngoding.png',1,1,2,2);
//$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'ELIM FLOWER',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'HP : 081994146954',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JLN RAYA BOGOR',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.elimflower.com',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'email : elimflower@gmail.com',0,'L');
$pdf->Line(4,3.7,25.5,3.7);
$pdf->SetLineWidth(0.1);      
$pdf->Line(4,3.8,25.5,3.8);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(22,0.7,'Laporan Data Penjualan',0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(0.5);
$pdf->Cell(8.7,0.7,"Laporan Penjualan pada : ".$_POST['tgl_awal'].' s/d '.$_POST['tgl_akhir'],0,0,'C');
$pdf->ln(1);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Total harga', 1, 1, 'C');

$no=1;
$tanggal_awal = $_POST['tgl_awal'];
$tanggal_akhir = $_POST['tgl_akhir'];
$query=mysqli_query($dbconnect,"select * from transaksi where tgl_transaksi>='$tanggal_awal' and tgl_transaksi<='$tanggal_akhir' order by tgl_transaksi asc");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['tgl_transaksi'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['kd_pelanggan'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['qty'], 1, 0,'C');
	$pdf->Cell(4, 0.8, "Rp. ".number_format($lihat['harga'])." ,-", 1, 0,'C');
	$pdf->Cell(4.5, 0.8, "Rp. ".number_format($lihat['total_bayar'])." ,-",1, 1, 'C');
	
	$no++;
}
$q=mysqli_query($dbconnect,"select sum(total_bayar) as total from transaksi where tgl_transaksi between '$tanggal_awal' and '$tanggal_akhir'") or die(mysqli_error());
// select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
while($total=mysqli_fetch_array($q)){
	$pdf->Cell(17, 0.8, "Total Pendapatan", 1, 0,'C');		
	$pdf->Cell(4.5, 0.8, "Rp. ".number_format($total['total'])." ,-", 1, 0,'C');	
}
$pdf->Output("laporan_buku.pdf","I");

?>