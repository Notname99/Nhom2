<?php
include './admincp/config/connect_db.php';

$select = "SELECT * FROM `tb_size`";
$query = mysqli_query($conn, $select);


?>
<div class="gallery">
    <img class="close" src="../asset/image/logo/icons8-close.svg" alt="" width="35" height="35">
    <div class="gallery-inner">
        <img src="../asset/image/Adidas/Adidas-Alphabounce-Beyond-Black.jpg" alt="">
    </div>
    <ul class="order">
        <h2>Tên sản phẩm</h2>
        <li class="star">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
        </li>
        <li class="coin"><h3>Giá</h3></li>
        <li class="sizes">
            <label>Size:</label>
            <select name="" id="">
                <?php while($row = mysqli_fetch_array($query)) {?>
                    <option value="<?=$row['id']?>"><?=$row['size']?></option>
                <?php }?>
            </select>
        </li>
        <li class="orders">
            <button type="button">
                <a href="#" class="carts"><i class="bi bi-cart4"></i> Đặt hàng</a>
            </button>
        </li>
    </ul>
</div>