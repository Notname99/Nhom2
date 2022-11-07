<?php
$error = false;
//đăng nhập
if (isset($_POST['signin'])) {
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
            $error = 'Tài khoản hoặc mật khẩu không đúng';
        }
    }elseif (empty($user) && empty($pass)){
        $error = 'Chưa điền đầy đủ thông tin';
    }elseif (empty($user)){
        $error = 'Chưa nhập tài khoản';
    }elseif (empty($pass)){
        $error = 'Chưa nhập mật khẩu';
    }
    if ($error !== false){?>
        <div class="error">
            <h4><?=$error?></h4>
            <a href="javascript:history.back()">Quay lại</a>
        </div>
    <?php }
}else {
?>
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="../../asset/image/background/signin-image.jpg" alt="sing up image"></figure>
                <a href="./index.php?quanly=sign-up" class="signup-image-link">Tạo tài khoản</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Đăng nhập</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="user" id="your_name" placeholder="<?php echo (isset($error['user']))?$error['user']:'Tài khoản'?>"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="your_pass" placeholder="<?php echo (isset($error['pass']))?$error['pass']:'Mật khẩu'?>"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Nhớ mật khẩu</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Hoặc đăng nhập bằng</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>