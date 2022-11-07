<?php
$error = false;
//đăng ký
if (isset($_POST['signup'])) {
    // lấy dữ liệu từ form
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $cf_pass = $_POST['cf_pass'];
    //kiểm tra thông tin đăng ký
    if (!empty($user) && !empty($pass) && !empty($email) && !empty($number) && !empty($cf_pass) && ($pass==$cf_pass)){
        //nhập dữ liệu vào databases
        $insert = "INSERT INTO `tb_register` (`id`, `user`, `email`, `sđt`, `pass`, `ngaylap`) VALUES (NULL, '$user', '$email', '$number', '$pass', '".time()."')";
        $mysqli = mysqli_query($conn, $insert);
        //kiểm tra
        if ($mysqli===true) {?>
            <div class="thanhcong">
                <h4>Thêm tài khoản thành công</h4>
                <a href="index.php?quanly=sign-in">Quay lại trang đăng nhập</a>
            </div>
        <?php }else {
            $error = "Lỗi{$mysqli}".$conn->error;
        }
    }elseif (empty($user) && empty($pass) && empty($email) && empty($number) && empty($cf_pass)){
        $error = 'Chưa nhập đầy đủ thông tin';
    }elseif (empty($user)){
        $error = 'Chưa điền tài khoản';
    }elseif (empty($email)){
        $error = 'Chưa điền email';
    }elseif (empty($number)){
        $error = 'Chưa điền số điện thoại';
    }elseif (empty($pass)){
        $error = 'Chưa điền mật khẩu';
    }elseif (empty($cf_pass)){
        $error = 'Chưa điền lại mật khẩu';
    }elseif ($pass!=$cf_pass){
        $error = 'Không khớp với mật khẩu đã nhập';
    }
    // elseif ($check===false){
    //     $error['checkbox'] = 'Bạn có điều gì còn thắc mắc trong điều khoản? <a href="../../index.php?quanly=hotro">Đóng góp ngay đến với chúng tôi</a>';
    // }
    if ($error !== false) {?>
        <div class="error">
            <h4><?=$error?></h4>
            <a href="javascript:history.back()">Quay lại</a>
        </div>
    <?php }
}else {
?>

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Đăng ký</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="user" id="name" placeholder="<?php echo (isset($error['user']))?$error['user']:'Nhập tài khoản'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="<?php echo (isset($error['email']))?$error['email']:'Nhập Email'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="number"><i class="zmdi zmdi-phone"></i></i></label>
                        <input type="number" name="number" id="number" placeholder="<?php echo (isset($error['number']))?$error['number']:'Nhập SĐT'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="<?php echo (isset($error['pass']))?$error['pass']:'Nhập mật khẩu'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="cf_pass" id="re_pass" placeholder="<?php echo (isset($error['cf_pass']))?$error['cf_pass']:'Nhập lại mật khẩu'?>"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Tôi đồng ý với  <a href="#" class="term-service">Điều khoản và Dịch vụ</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng ký"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="../../asset/image/background/signup-image.jpg" alt="sing up image"></figure>
                <a href="index.php?quanly=sign-in" class="signup-image-link">Tôi có tài khoản</a>
            </div>
        </div>
    </div>
</section>
<?php }?>