<?php
$mysql_chitiet = mysqli_query($conn, "SELECT `ma_sanpham`, `ten`, `tendh`, `soluongmua`, `tb_giohang_chitiet`.`gia`, `tb_giohang_chitiet`.`created_time` FROM `tb_giohang_chitiet`, `tb_sanpham`, `tb_giohang` WHERE `tb_sanpham`.`id`=`tb_giohang_chitiet`.`ma_sanpham` AND `tb_giohang_chitiet`.`ma_giohang`=`tb_giohang`.`id` AND `tb_giohang_chitiet`.`ma_giohang`=".$_GET['id']);
$ten = mysqli_fetch_array($mysql_chitiet);
?>

<div class="donhang">
    <h3>thông tin đơn hàng "<?=$ten['tendh']?>"</h3>
    <table>
        <tr>
            <th class="donhang-ma">Mã sản phẩm</th>
            <th class="donhang-tensp">Tên sản phẩm</th>
            <th class="donhang-soluong">Số lượng</th>
            <th class="donhang-gia">Giá</th>
            <th class="chitiet-ct">Ngày mua</th>
        </tr>
    <?php while ($row = mysqli_fetch_array($mysql_chitiet)) {?>
        <tr>
            <td class="donhang-ma"><?=$row['ma_sanpham']?></td>
            <td class="donhang-tensp"><?=$row['ten']?></td>
            <td class="donhang-soluong"><?=$row['soluongmua']?></td>
            <td class="donhang-gia"><?=number_format($row['gia'],0, ",", ".")?></td>
            <td class="chitiet-ct"><?=date("d/m/Y H:i", $row['created_time'])?></td>
        </tr>
    <?php }?>
    </table>
</div>