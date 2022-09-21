<?php
    include './admincp/config/connect_db.php';

    $query = "SELECT * FROM `tb_adidas` WHERE id=10 OR id=23 ORDER BY id ASC";
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
                <?php while ($row = mysqli_fetch_array($mysql)) { ?>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="#" class="product-thumb">
                                <img src=<?=$row['img']?> alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><?=$row['ten']?></a>
                            <a href="#" class="product-price"><?=number_format($row['gia'],0,",",".")?><samp>đ</samp></a>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
