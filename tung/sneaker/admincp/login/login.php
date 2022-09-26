<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../asset/css/login.css">

</head>
<body>
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>Bạn đã có tài khoản?</h2>
            <p>Lorem ipsum dolor sit amet</p>
            <label id="label-register" for="log-reg-show">Đăng nhập</label>
            <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
        </div>
                            
        <div class="register-info-box">
            <h2>Bạn chưa có tài khoản?</h2>
            <p>Lorem ipsum dolor sit amet</p>
            <label id="label-login" for="log-login-show">Đăng ký</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>
                            
        <div class="white-panel">
            <div class="login-show">
                <h2>ĐĂNG NHẬP</h2>
                <form method="POST" action="xuly.php">
                    <input type="text" name="user" placeholder="User">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="button-login" value="Đăng nhập">
                </form>
                <a href="">Quên mật khẩu?</a>
            </div>
            <div class="register-show">
                <h2>ĐĂNG KÝ</h2>
                <form method="POST" action="xuly.php">
                    <input type="text" name="user" placeholder="User">
                    <input type="email" name="email" placeholder="Email">
                    <input type="number" name="number" placeholder="SĐT">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="password" name="cf_pass" placeholder="Confirm Password">
                    <input type="submit" name="button-register" value="Đăng ký">
                </form>
            </div>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../asset/js/login.js"></script>
</body>
</html>