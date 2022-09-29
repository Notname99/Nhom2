<?php
include 'xuly.php'
?>

<section class="vh vh-100 bg-image" >
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Đăng ký</h2>
                            <form method="POST" action="">
                                <span class="color"><?php echo(isset($err)?$err:'');?></span>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Username</label>
                                    <input type="text" id="form3Example1cg" name="user" class="form-control form-control-lg" placeholder="Username"/>
                                    <span class="color"><?php echo(isset($error['user'])?$error['user']:''); ?></span>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Email</label>
                                    <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" placeholder="Email"/>
                                    <span class="color"><?php echo(isset($error['email'])?$error['email']:''); ?></span>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Number</label>
                                    <input type="number" id="form3Example3cg" name="number" class="form-control form-control-lg" placeholder="Number"/>
                                    <span class="color"><?php echo(isset($error['number'])?$error['number']:''); ?></span>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                    <input type="password" id="form3Example4cg" name="pass" class="form-control form-control-lg" placeholder="Password"/>
                                    <span class="color"><?php echo(isset($error['pass'])?$error['pass']:''); ?></span>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    <input type="password" id="form3Example4cdg" name="cf_pass" class="form-control form-control-lg" placeholder="Repeat your password"/>
                                    <span class="color"><?php echo(isset($error['cf_pass'])?$error['cf_pass']:''); ?></span>
                                </div>
                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="check form-check-input me-2" name="checkbox" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">Tôi đồng ý tất cả các tuyên bố trong <a href="#" class="text-body"><u>Điều khoản dịch vụ</u></a></label>
                                    <span class="color"><?php echo(isset($error['checkbox'])?$error['checkbox']:''); ?></span>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="button-register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Đăng ký</button>
                                </div>
                                <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="index-login.php?quanly=login" class="fw-bold text-body"><u>Đăng nhập tại đây</u></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>