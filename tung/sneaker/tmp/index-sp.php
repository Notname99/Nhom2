<?php
    include 'main-sp.php';
?>

<div class="wrapper">
    <div class="main">
        <div class="dropdowns">
            <select name="" id="">
                <option value=""> Thứ tự theo điểm đánh giá</option>
                <option value=""> Thứ tự theo giá: thấp đến cao</option>
                <option value=""> Thứ tự theo giá: cao xuống thấp</option>
            </select>
        </div>
        <div class="main-adidas">
            <ul class="product">
                <?php while ($row = mysqli_fetch_array($mysql)) { ?>
                    <li>
                        <div class="product-item">
                            <div class="product-top">
                                <img src=<?=$row['img']?> alt="">
                                <a href="#" class="carts"><i class="bi bi-cart4"></i> Thêm vào giỏ hàng</a>
                            </div>
                            <div class="product-info">
                                <!-- <div class="star">
                                    <a href="../../index.php?quanly=1" class="star-item"><i class="bi bi-star-fill"></i></a>
                                    <a href="../../index.php?quanly=2" class="star-item"><i class="bi bi-star-fill"></i></a>
                                    <a href="../../index.php?quanly=3" class="star-item"><i class="bi bi-star-fill"></i></a>
                                    <a href="../../index.php?quanly=4" class="star-item"><i class="bi bi-star"></i></a>
                                    <a href="../../index.php?quanly=5" class="star-item"><i class="bi bi-star"></i></a>
                                </div> -->
                                <a href="#>" class="product-name"><?=$row['ten']?></a>
                                <a href="#" class="product-price"><?=number_format($row['gia'],0,",",".")?><samp>đ</samp></a>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="number_page">
                <?php if ($trang_ht > 1) {
                    $prev_page = $trang_ht - 1;
                ?>
                    <a href="../../index.php?quanly=<?=$data?>&id=1&per_page=<?=$so_sp?>&page=<?=$prev_page?>" class="page-item"><-</a>
                <?php } ?>
                <?php if($tam=='Adidas' || $tam=='Nike') {
                    for($num = 1; $num <= $so_trang; $num++) { ?>
                        <?php if ($num != $trang_ht) { ?>
                            <?php if ($num > $trang_ht - 1 && $num < $trang_ht + 2) { ?>
                                <a class="page-item" href="../../index.php?quanly=<?=$data?>&id=1&per_page=<?=$so_sp?>&page=<?=$num?>"><?=$num?></a>
                            <?php } ?>
                        <?php } else { ?>
                            <strong class="dam page-item"><?=$num?></strong>
                        <?php } ?>
                <?php } } if ($tam=='Adidas' || $tam=='Nike') {
                    if ($trang_ht < $so_trang - 1) {
                        $next_page = $trang_ht + 1; ?>
                        <a href="../../index.php?quanly=<?=$data?>&id=1&per_page=<?=$so_sp?>&page=<?=$next_page?>" class="page-item">-></a>
                <?php } } ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
