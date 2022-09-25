<?php
    include './admincp/config/connect_db.php';

    $so_sp = !empty($_GET['per_page']) ? $_GET['per_page'] : 12;
    $trang_ht = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($trang_ht - 1) * $so_sp;

    if ($tam=='Adidas') {
        $data = 'Adidas';
        $query = "SELECT * FROM tb_adidas ORDER BY id ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM tb_adidas";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='SuperStar') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=27 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Stan-Smith') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=8 OR id=28 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Alphabounce') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=9 OR id=12 OR id=15 OR id=16 OR id=24 OR id=25 OR id=26 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='NMD') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=10 OR id=23 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Prophere') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=11 OR id=29 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Ultraboost') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=4 OR id=5 OR id=6 OR id=7 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Falcon') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=1 OR id=2 OR id=3 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Yeezy') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_adidas` WHERE id=13 OR id=14 OR id=17 OR id=18 OR id=19 OR id=20 OR id=21 OR id=22 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Nike') {
        include("./pages/main/thuong-hieu.php");
        $data = 'Nike';
        $query = "SELECT * FROM tb_nike ORDER BY id ASC LIMIT ".$so_sp." OFFSET ".$offset;
        $mysql = mysqli_query($conn, $query);

        $querys = "SELECT * FROM tb_nike";
        $tong = mysqli_query($conn, $querys);
        $tong = $tong->num_rows;
        $so_trang = ceil($tong / $so_sp);
    }elseif ($tam=='AirForce1') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=7 OR id=8 OR id=9 OR id=18 OR id=20 OR id=21 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Jordan') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=1 OR id=12 OR id=15 OR id=16 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=10 OR id=11 OR id=17 OR id=19 OR id=22 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax97') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=11 OR id=19 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax270') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=10 OR id=22 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='AirMax90') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=17 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='M2KTekno') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=4 OR id=5 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }elseif ($tam=='Uptempo') {
        include("./pages/main/thuong-hieu.php");
        $query = "SELECT * FROM `tb_nike` WHERE id=13 OR id=14 ORDER BY id ASC";
        $mysql = mysqli_query($conn, $query);
    }

    // $querys = "SELECT * FROM tb_adidas";
    // $tong = mysqli_query($conn, $querys);
    // $tong = $tong->num_rows;
    // $so_trang = ceil($tong / $so_sp);
?>