<?php
    include './admincp/config/connect_db.php';

    $so_sp = !empty($_GET['per_page']) ? $_GET['per_page'] : 12;
    $trang_ht = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($trang_ht - 1) * $so_sp;

    $query = "SELECT * FROM tb_nike ORDER BY id ASC LIMIT ".$so_sp." OFFSET ".$offset;
    $mysql = mysqli_query($conn, $query);

    $querys = "SELECT * FROM tb_nike";
    $tong = mysqli_query($conn, $querys);
    $tong = $tong->num_rows;
    $so_trang = ceil($tong / $so_sp);
?>

<div class="wrapper">
    <div class="main">
        <div class="dropdowns">
            <select name="" id="">
                <option value="new">Mới nhất</option>
                <option value="">Thứ tự theo mức phổ biến</option>
                <option value="">Thứ tự theo điểm đánh giá</option>
                <option value="">Thứ tự theo giá: thấp đến cao</option>
                <option value="">Thứ tự theo giá: cao xuống thấp</option>
            </select>
        </div>
        <div class="main-adidas">
            <ul class="product">
                <?php $id=0; $chitiet=0; while ($row = mysqli_fetch_array($mysql)) { $id++; $chitiet++?>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="../../index.php?quanly=<?=$chitiet?>&id=<?=$id?>" class="product-thumb">
                                <img src=<?=$row['img']?> alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="../../index.php?quanly=<?=$chitiet?>&id=<?=$id?>" class="product-name"><?=$row['ten']?></a>
                            <a href="../../index.php?quanly=<?=$chitiet?>&id=<?=$id?>" class="product-price"><?=number_format($row['gia'],0,",",".")?><samp>đ</samp></a>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="number_page">
                <?php if ($trang_ht > 1) {
                    $prev_page = $trang_ht - 1;
                ?>
                    <a href="../../index.php?quanly=Nike&id=2&per_page=<?=$so_sp?>&page=<?=$prev_page?>" class="page-item"><-</a>
                <?php } ?>
                <?php for($num = 1; $num <= $so_trang; $num++) { ?>
                    <?php if ($num != $trang_ht) { ?>
                        <?php if ($num > $trang_ht - 1 && $num < $trang_ht + 2) { ?>
                            <a class="page-item" href="../../index.php?quanly=Nike&id=2&per_page=<?=$so_sp?>&page=<?=$num?>"><?=$num?></a>
                        <?php } ?>
                    <?php } else { ?>
                        <strong class="dam page-item"><?=$num?></strong>
                    <?php } ?>
                <?php } ?>
                <?php if ($trang_ht < $so_trang - 1) {
                    $next_page = $trang_ht + 1;?>
                    <a href="../../index.php?quanly=Nike&id=2&per_page=<?=$so_sp?>&page=<?=$next_page?>" class="page-item">-></a>
                <?php } ?>
            </div>
        </div>
        <div class="clear"></div>
        <?php
        include ("Nike_gt.php");
        ?>
    </div>
</div>
<div class="clear"></div>
