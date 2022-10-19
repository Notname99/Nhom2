<?php
    include './admincp/config/connect_db.php';

    $so_sp = !empty($_GET['per_page']) ? $_GET['per_page'] : 12;
    $trang_ht = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($trang_ht - 1) * $so_sp;

    if ($tam=='Adidas') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM tb_sanpham WHERE ma_thuonghieu=1 ORDER BY id ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM tb_sanpham WHERE ma_thuonghieu=1";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='SuperStar') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=1 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Stan-Smith') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=2 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Alphabounce') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=3 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='NMD') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $data = 'Adidas';
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=4 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Prophere') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=5 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Ultraboost') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=6 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Falcon') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=7 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Yeezy') {
        $data = 'Adidas';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=8 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Nike') {
        include("./pages/main/thuong-hieu.php");
        $data = 'Nike';
        $query = "SELECT * FROM tb_sanpham WHERE ma_thuonghieu=2 ORDER BY id ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM tb_sanpham WHERE ma_thuonghieu=2";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='AirForce1') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=9 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Jordan') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=10 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu IN (13,14,15) ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax97') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=13 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax270') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=14 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax90') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=15 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='M2KTekno') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=17 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Uptempo') {
        $data = 'Nike';
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_sanpham` WHERE ma_nhanhieu=16 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }else {
        include("./pages/main/thuong-hieu.php");
    }
?>