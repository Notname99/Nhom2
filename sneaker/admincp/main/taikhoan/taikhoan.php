<?php 
$user = mysqli_query($conn, "SELECT * FROM `tb_register` ORDER BY `id` ASC");
?>
<div class="user">
    <h3>Thông tin tài khoản người dùng</h3>
    <table>
        <tr>
            <th class="stt">STT</th>
            <th class="username">Tài khoản</th>
            <th class="sđt">SĐT</th>
            <th class="trangthai">Trạng thái</th>
            <th class="update">Sửa</th>
            <th class="delete">Xóa</th>
        </tr>
    <?php $stt=1; while ($row = mysqli_fetch_array($user)){
        if ($row['trangthai']==0){
            $trangthai = '<label class="offline">Không hoạt động</label>';
        }else{
            $trangthai = '<label class="online">Hoạt động</label>';
        }?>
        <tr>
            <td class="stt"><?=$stt?></td>
            <td class="username"><?=$row['user']?></td>
            <td class="sđt"><?=$row['sđt']?></td>
            <td class="trangthai"><?=$trangthai?></td>
            <td class="update"><a href="../../../admincp/index.php?admin=edit-tk&id=<?=$row['id']?>">Sửa</a></td>
            <td class="delete"><a href="../../../admincp/index.php?admin=delete-tk&id=<?=$row['id']?>">Xóa</a></td>
        </tr>
    <?php $stt++; }?>
    </table>
</div>