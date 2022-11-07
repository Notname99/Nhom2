<?php 
$so_sp = !empty($_GET['per_page']) ? $_GET['per_page'] : 10;
$trang_ht = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($trang_ht - 1) * $so_sp;

$query = "SELECT * FROM `tb_sanpham` ORDER BY `id` ASC LIMIT ".$so_sp." OFFSET ".$offset;
$mysql = mysqli_query($conn, $query);

$querys = "SELECT * FROM `tb_sanpham`";
$tong = mysqli_query($conn, $querys);
$tong = $tong->num_rows;
$so_trang = ceil($tong / $so_sp);
?>
<div class="sanpham">
    <button type="button"><a href="../../../admincp/index.php?admin=them_sp">Thêm sản phẩm</a></button>
    <h3>thông tin sản phẩm</h3>
    <table>
        <tr>
            <th class="sanpham-stt">Mã SP</th>
            <th class="sanpham-tensp">Tên sản phẩm</th>
            <th class="sanpham-img">Ảnh</th>
            <th class="sanpham-ngaycapnhap">Ngày cập nhập</th>
            <th class="sanpham-ngaytao">Ngày tạo</th>
            <th class="sanpham-update">Sửa</th>
            <th class="sanpham-delete">Xóa</th>
        </tr>
    <?php while ($row = mysqli_fetch_array($mysql)) {?>
        <tr>
            <td class="sanpham-stt"><?=$row['id']?></td>
            <td class="sanpham-tensp"><?=$row['ten']?></td>
            <td class="sanpham-img"><img src="<?=$row['img']?>" alt="<?=$row['ten']?>"></td>
            <td class="sanpham-ngaycapnhat"><?=date("d/m/Y H:i", $row['ngaycapnhat'])?></td>
            <td class="sanpham-ngaytao"><?=date("d/m/Y H:i", $row['ngaytao'])?></td>
            <td class="sanpham-update"><a href="../../admincp/index.php?admin=update&id=<?=$row['id']?>">Sửa</a></td>
            <td class="sanpham-delete"><a href="../../admincp/index.php?admin=delete-sp&id=<?=$row['id']?>">Xóa</a></td>
        </tr>
    <?php }?>
    </table>
    <div class="number_page">
        <?php 
        if ($trang_ht > 3){
            $first_page = 1;?>
            <a class="page-item" href="../../admincp/index.php?admin=sanpham&per_page=<?=$so_sp?>&page=<?=$first_page?>"> << </i></a>
        <?php }
        if ($trang_ht > 3) {
            $prev_page = $trang_ht - 1;
        ?>
        <a href="../../admincp/index.php?admin=sanpham&id=1&per_page=<?=$so_sp?>&page=<?=$prev_page?>" class="page-item"> < </a>
        <?php } 
            for ($num = 1; $num <= $so_trang; $num++) { ?>
        <?php if ($num != $trang_ht) { ?>
            <?php if ($num > $trang_ht - 3 && $num < $trang_ht + 3) { ?>
                <a class="page-item" href="../../admincp/index.php?admin=sanpham&per_page=<?=$so_sp?>&page=<?=$num?>"><?=$num?></a>
            <?php } ?>
        <?php } else { ?>
            <strong class="dam page-item"><?= $num ?></strong>
        <?php } ?>
        <?php } 
            if ($trang_ht < $so_trang - 1) {
                $next_page = $trang_ht + 1; ?>
                    <a href="../../admincp/index.php?admin=sanpham&per_page=<?= $so_sp ?>&page=<?= $next_page ?>" class="page-item"> > </i></i></a>
            <?php }
        if ($trang_ht < $so_trang - 3){
            $end_page = $so_trang;?>
            <a class="page-item" href="../../admincp/index.php?admin=sanpham&per_page=<?=$so_sp?>&page=<?=$end_page?>"> >> </a>
        <?php }?>
    </div>
</div>