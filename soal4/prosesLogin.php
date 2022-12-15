<?php

$koneksi = mysqli_connect("localhost","admin","admin","db_madeindonesia");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

    $postUsername = $_POST["username"];
    $postPassword = $_POST["password"];
    echo $post;

$data = mysqli_query($koneksi,"select * from tb_akun where username = '$postUsername' && password = '$postPassword'");
if(mysqli_num_rows($data)>0){
    while($d = mysqli_fetch_array($data)){
        echo "Sukses Login";
    }
}else{
    echo "Gagal Login";
}
?>