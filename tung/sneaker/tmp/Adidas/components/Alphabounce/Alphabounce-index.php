<?php
    include './admincp/config/connect_db.php';

    $query = "SELECT * FROM `tb_adidas` WHERE id=9 OR id=12 OR id=15 OR id=16 OR id=24 OR id=25 OR id=26 ORDER BY id ASC";
    $mysql = mysqli_query($conn, $query);
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
                <?php $id=0; $chitiet=0;  while ($row = mysqli_fetch_array($mysql)) { $id++; $chitiet++;?>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="../../../../index.php?quanly=<?=$chitiet?>&id=<?=$id?>" class="product-thumb">
                                <img src=<?=$row['img']?> alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="../../../../index.php?quanly=<?=$chitiet?>&id=<?=$id?>" class="product-name"><?=$row['ten']?></a>
                            <a href="../../../../index.php?quanly=<?=$chitiet?>&id=<?=$id?>" class="product-price"><?=number_format($row['gia'],0,",",".")?><samp>đ</samp></a>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="clear"></div>
            <?php
            include ("Alphabounce_gt.php");
            ?>
    </div>
</div>
<div class="clear"></div>