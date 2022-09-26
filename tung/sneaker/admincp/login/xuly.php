<?php
include '../config/connect_db.php';
//đăng nhập
if (isset($_POST['button-login'])) {
    // lấy dữ liệu từ form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //lấy dữ liệu từ databases và truy vấn dữ liệu
    $select = "SELECT * FROM `tb_register` WHERE user='$user' AND pass='$pass'";
    $mysql = mysqli_query($conn, $select);
    //kiểm tra thông tin đăng nhập
    if (!empty($user) && !empty($pass)) {
        if (mysqli_num_rows($mysql) > 0) {
            $row = mysqli_fetch_array($mysql);
            if ($row['user']=='ad' && $row['pass']=='admin'){
                header("Location:../index.php");
            }else {
                header("Location:../../index.php");
            }
        }else {
            echo 'Tài khoản hoặc mật khẩu không đúng!';
            require_once 'login.php';
        }
    }else{
        echo "Vui lòng nhập tài khoản và mật khẩu!";
        require_once 'login.php';
    }
}
//đăng ký
if (isset($_POST['button-register'])) {
    // lấy dữ liệu từ form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $cf_pass = $_POST['cf_pass'];
    //lấy dữ liệu từ databases
    $select = "SELECT * FROM `tb_register` ORDER BY id ASC";
    $mysqls = mysqli_query($conn, $select);
    //kiểm tra thông tin đăng ký
    if (!empty($user) && !empty($pass) && !empty($email) && !empty($number) &&!empty($cf_pass)){
        // $row = mysqli_fetch_array($mysqls);
        // if ($user==$row['user']) {
        //     echo "User này đã được đăng ký trước đó rồi".$conn->error;
        //     require_once 'login.php';
        // }elseif ($email==$row['email']) {
        //     echo "Email này đã được đăng ký trước đó rồi".$conn->error;
        //     require_once 'login.php';
        // }
        if ($pass!=$cf_pass){
            echo 'Lỗi! Mật khẩu không khớp nhau'.$conn->errno;
            require_once 'login.php';
        }else{
            //nhập dữ liệu vào databases
            $insert = "INSERT INTO `tb_register` (`id`, `user`, `email`, `sđt`, `pass`) VALUES (NULL, '$user', '$email', '$number', '$pass')";
            $mysqli = mysqli_query($conn, $insert);
            //kiểm tra
            if ($mysqli===true) {
                echo 'đăng ký thành công';
                require_once 'login.php';
            }else {
                echo "Lỗi {$mysqli}".$conn->error;
            }
        }
    }else{
        echo "bạn cần điền đầy đủ thông tin trước khi đăng ký";
        require_once 'login.php';
    }
}
?>