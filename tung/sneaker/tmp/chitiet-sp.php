<?php
    include './admincp/config/connect_db.php';

    $query = "SELECT * FROM tb_sanpham WHERE id=$id";
    $mysql = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($mysql);

    if ($row['soluongkho']<1){
        $soluong = 'Hết hàng';
    }else{
        $soluong = number_format($row['soluongkho'], 0, ",", ".");
    }

?>
<div class="cach"></div>
<div class="chitiet-sp">
    <div class="thongtin-sp">
        <h1><?=$row['ten']?></h1>
        <div class="star">
            <span href="#" class="star-item"><i class="bi bi-star-fill"></i></span>
            <span href="#" class="star-item"><i class="bi bi-star-fill"></i></span>
            <span href="#" class="star-item"><i class="bi bi-star-half"></i></span>
            <span href="#" class="star-item"><i class="bi bi-star"></i></span>
            <span href="#" class="star-item"><i class="bi bi-star"></i></span>
        </div>
        <div class="flex mb-4">
            <div class="a2a_kit a2a_kit_size_24 a2a_default_style" data-a2a-icon-color="transparent,#40ABB0">
                <a class="a2a_button_copy_link"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>
        <p>Một đôi <?=$nho?> được thiết kế với công nghệ tiên tiến chuyên dùng để sản xuất sản phẩm cho các vận động viên chuyên nghiệp sẽ giúp tối ưu hóa hiệu suất hoạt động và tiết kiệm năng lượng cho các hoạt động trong ngày của bạn.</p><hr>
        <h3><?=number_format($row['gia'], 0, ",", ".")?><samp>đ</samp></h3><hr>
        <p>Số lượng trong kho: <span><?=$soluong?></span></p><hr>
        <div class="giohang">
            <form action="../index.php?quanly=cart&action=add" method="POST">
                <input class="giohang-number" name="soluong[<?=$row['id']?>]" type="number" value="1">
                <input class="giohang-button" name="submit" type="submit" value="Thêm vào giỏ">
            </form>
        </div>
    </div>
    <div class="image-sp">
        <img src="<?=$row['img']?>" alt="<?=$row['ten']?>">
    </div>
</div>