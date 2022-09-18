<?php
  include './admincp/config/connect_db.php';

  $img = $row['img'];
  $ten = $row['ten'];
  $gia = $row['gia'];

  $size = "SELECT * FROM tb_size ORDER BY id ASC";
  $sizes = mysqli_query($conn, $size);
?>

<div class="cach"></div>
<div class="main-chitiet">
  <div class="image">
    <div class="img-main">
      <img src=<?=$img?> alt="">
    </div>
  </div>
  <div class="main-info">
    <h1><?=$ten?></h1>
    <p><b><?=number_format($gia,0,",",".")?><span>đ</span></b></p>
    <div class="row">
      <form action="">
        <div class="dropdownn">
          <p><b>size</b></p>
          <div class="gan">
            <select name="" id="">
              <option value="new">chọn kích cỡ</option>
              <?php  while ($row = mysqli_fetch_array($sizes)) { ?>
                <option value=<?=$row['id']?>><?=$row['size']?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="gio-hang">
          <input class="number" type="number" value="1">
          <button class="submit"><i class="bi bi-cart4"></i> Giỏ hàng</button>
        </div>
      </form>
    </div>
    <ul class="items">
      <li>
        <p><b>giao hàng toàn quốc</b></p>
        <p>Thanh toán COD</p>
      </li>
      <li>
        <p><b>có sẵn tại cửa hàng</b></p>
        <p>Giao ngay trong ngày</p>
      </li>
      <li>
        <p><b>đổi trả dễ dàng</b></p>
        <p>Khi không vừa size</p>
      </li>
    </ul>
    <div class="color">
      <p><b>Màu sắc khác:</b></p>
      <div class="color-item">
        <a href="#"><img src="../../asset/image/Adidas/Adidas-Falcon-Crystal-White-Navy.jpg" alt=""></a>
      </div>
      <div class="color-item">
        <a href="#"><img src="../../asset/image/Adidas/Adidas-Falcon-Acid-House.jpg" alt=""></a>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="thong-tin">
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
      <div class="btn-group mr-2" role="group" aria-label="First group">
        <button type="button" class="btn btn-secondary"><a href="../../index.php?check=mota">mô tả</a></button>
        <button type="button" class="btn btn-secondary"><a href="../../index.php?check=thongtin">thông tin khác</a></button>
        <button type="button" class="btn btn-secondary"><a href="../../index.php?check=danhgia">đánh giá ()</a></button>
      </div>
    </div>
  </div>
</div>