<?php
$mysql_donhang = mysqli_query($conn, "SELECT * FROM `tb_giohang` ORDER BY `id` ASC");

?>

<div class="donhang">
<h3>thông tin đơn hàng</h3>
<table>
    <tr>
        <th class="donhang-ma">Mã đơn hàng</th>
        <th class="donhang-user">Tên người nhận</th>
        <th class="donhang-diachi">Địa chỉ</th>
        <th class="donhang-tong">Tổng</th>
        <th class="donhang-ct">Chi tiết</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($mysql_donhang)) {?>
        <tr>
            <td class="donhang-ma"><?=$row['id']?></td>
            <td class="donhang-user"><?=$row['tendh']?></td>
            <td class="donhang-diachi"><?=$row['diachi']?></td>
            <td class="donhang-tong"><?=number_format($row['tongtien'],0, ",", ".")?></td>
            <td class="donhang-ct"><a href="../../../admincp/index.php?admin=chitiet_dh&id=<?=$row['id']?>">Chi tiết</a></td>
        </tr>
    <?php }?>
</table>
</div>