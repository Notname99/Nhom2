<?php
include 'xuly.php';
?>
<section class="login-block">
    <div class="container">
	    <div class="row">
		    <div class="col-md-4 login-sec">
		        <h2 class="text-center">Đăng nhập</h2>
		    <form method="POST" action="" class="login-form">
                <span class="color"><?php echo(isset($err)?$err:'');?></span>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Username">
                    <span class="color"><?php echo(isset($error['user'])?$error['user']:''); ?></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                    <span class="color"><?php echo(isset($error['pass'])?$error['pass']:''); ?></span>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="check" class="form-check-input">
                        <small>Nhớ mật khẩu?</small>
                    </label>
                    <button type="submit" name="button-login" class="btn btn-login float-right">Đăng nhập</button>
                </div>
            </form>
            <div class="copy-text">Bạn chưa có tài khoản?<a href="index-login.php?quanly=register">Đăng ký</a></div>
		</div>
		<div class="col-md-8 banner-sec"></div>
    </div>
</section>