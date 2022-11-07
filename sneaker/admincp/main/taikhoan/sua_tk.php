<?php 
$mysqli_select = mysqli_query($conn, "SELECT * FROM `tb_register` WHERE `id` = ".$_GET['id']." ORDER BY `id` ASC");
$row = mysqli_fetch_array($mysqli_select);
$error = false;
if (isset($_GET['action']) && $_GET['action'] == 'edit-tk'){
    if (isset($_POST['user_id']) && !empty($_POST['user_id']) 
    && isset($_POST['pass']) && !empty($_POST['pass']) 
    && isset($_POST['number']) && !empty($_POST['number']) 
    && isset($_POST['email']) && !empty($_POST['email'])){
        $result = mysqli_query($conn, "UPDATE `tb_register` SET `email`='".$_POST['email']."', `sđt`='".$_POST['number']."', `pass`='".$_POST['pass']."', `trangthai`='".$_POST['trangthai']."' WHERE `id`='".$_POST['user_id']."'");
        if (!$result) {
            $error = 'Không thể cập nhập tài khoản';
        }
        mysqli_close($conn);
        if ($error !== false){?>
            <div class="sua-tk">
                <h4><?=$error?></h4>
                <a href="../../../admincp/index.php?admin=user">Danh sách tài khoản</a>
            </div>
        <?php } else{?>
            <div class="sua-tk">
                <h4><?=($error !== false )?$error:'Sửa tài khoản thành công'?></h4>
                <a href="../../../admincp/index.php?admin=user">Danh sách tài khoản</a>
            </div>
    <?php }}else{?>
        <div class="sua-tk">
            <h4>Vui lòng nhập đủ thông tin để sửa tài khoản</h4>
            <a href="javascript:history.back()">Quay lại</a>
        </div>
<?php }}else{?>
    <div class="sua-tk">
        <h1>Sửa thông tin tài khoản "<?=$row['user']?>"</h1>
        <form action="../../../admincp/index.php?admin=edit-tk&action=edit-tk&id=<?=$_GET['id']?>" method="POST" autocomplete="off">
            <input type="hidden" name="user_id" value="<?=$row['id']?>" >
            <input type="password" name="pass" value="" placeholder="Nhập mật khẩu mới"><br>
            <input type="number" name="number" value="<?=$row['sđt']?>" placeholder="Nhập số điện thoại mới"><br>
            <input type="email" name="email"  value="<?=$row['email']?>" placeholder="Nhập email mới"><br>
            <select name="trangthai">
                <option <?php if (!empty($row['trangthai'])) {?> selected <?php }?> value="1">Hoạt động</option>
                <option <?php if (!empty($row['trangthai'])) {?> selected <?php }?> value="0">Không hoạt động</option>
            </select><br>
            <input type="submit" name="submit" value="Sửa">
        </form>
    </div>
<?php }?>