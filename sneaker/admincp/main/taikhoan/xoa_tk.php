<?php 
$error = false;
if (isset($_GET['id']) && !empty($_GET['id'])){
    $result = mysqli_query($conn, "DELETE FROM `tb_register` WHERE `id`='".$_GET['id']."'");
    if (!$result) {
        $error = 'Không thể xóa tài khoản';
    }
    mysqli_close($conn);
    if ($error !== false){?>
        <div class="sua-tk">
            <h4><?=$error?></h4>
            <a href="../../../admincp/index.php?admin=user">Danh sách tài khoản</a>
        </div>
    <?php } else{?>
        <div class="sua-tk">
            <h4><?=($error !== false )?$error:'Xóa tài khoản thành công'?></h4>
            <a href="../../../admincp/index.php?admin=user">Danh sách tài khoản</a>
        </div>
<?php }}?>