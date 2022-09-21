<?php
    include './admincp/config/connect_db.php';

    $so_sp = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;
    $trang_ht = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($trang_ht - 1) * $so_sp;

    $query = "SELECT * FROM tb_mlb ORDER BY id ASC LIMIT ".$so_sp." OFFSET ".$offset;
    $mysql = mysqli_query($conn, $query);

    $querys = "SELECT * FROM tb_mlb";
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
        <div class="main-mlb">
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
                <?php }?>
            </ul>
        </div>
        <div class="clear"></div>
        <?php
        ?>
    </div>
</div>
<div class="clear"></div>
