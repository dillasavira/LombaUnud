<?php

include "../config.php" ;

if(isset($_GET['del']))
$id=$_GET['del'];

if(isset($_GET['data']))
{
switch($_GET['data'])
{
        
    case 'list_pelanggan':
    mysqli_query($dbconnect,"delete from pelanggan where id_pelanggan='$id'");
    header("location:index.php?page=list_pelanggan");
    break;
        
    case 'list_tanaman':
    mysqli_query($dbconnect,"delete from tanaman where kd_tanaman='$id'");
    header("location:index.php?page=list_tanaman");
    break;
	
	case 'list_kurir':
    mysqli_query($dbconnect,"delete from kurir where id_kurir='$id'");
    header("location:index.php?page=list_kurir");
    break;
        
}
}
?>