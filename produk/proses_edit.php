<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    

    if($nama_foto != ""){
        $qry = "SELECT * FROM produk WHERE id_produk='$id_produk'";
        $hapus_foto = mysqli_query($koneksi,$qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto'];
        $lokasi_foto = "../foto_produk/$nama_foto_hapus";
        if(file_exists($lokasi_foto)){
            unlink($lokasi_foto);
        }
        #3. Query Insert (proses edit data)
        $query = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok',foto='$nama_foto' 
        WHERE id_produk='$id_produk'";

        #hapus foto
        // $lokasi_foto = "../fotosiswa/$nama_foto";
        // if(file_exists($lokasi_foto)){
        //     unlink($lokasi_foto);
        // }

        #tambahkan foto
        move_uploaded_file($tmp_foto,"../fotosiswa/$nama_foto");
    }else{
        #3. Query Insert (proses edit data)
        $query = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok', WHERE id_produk='$id_produk'";
    }

    
    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>