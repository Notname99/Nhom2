<?php
$mysql_thuonghieu = mysqli_query($conn, "SELECT * FROM `tb_thuonghieu` ORDER BY `id` ASC");
$mysql_nhanhieu = mysqli_query($conn, "SELECT * FROM `tb_nhanhieu` ORDER BY `id` ASC");
 
if (isset($_POST['save'])){
    $tensp = $_POST['ten'];
    $image = $_POST['img'];
    $kichthuoc = $_POST['kichthuoc'];
    $gia = $_POST['gia'];
    $soluongton = $_POST['soluongton'];
    $chatlieu = $_POST['chatlieu'];
    $loai = $_POST['loai'];
    $item = $_POST['item'];
    if (isset($tensp) && !empty($tensp) 
    && isset($image) && !empty($image) 
    && isset($kichthuoc) && !empty($kichthuoc) 
    && isset($gia) && !empty($gia)
    && isset($soluongton) && !empty($soluongton) 
    && isset($chatlieu) && !empty($chatlieu)
    && isset($loai) && !empty($loai) 
    && isset($item) && !empty($item)){
        // $mysql_themsp = mysqli_fetch_array($conn, "INSERT INTO `tb_sanpham` (`id`, `tensp`, `img`, `kichthuoc`, `gia`, `chatlieu`, `soluong`, `ngaycapnhap`, `ngaytao`) VALUES (NULL, '$user', '$email', '$number', '$pass', '".time()."', '".time()."')");
    }
}else{?>
    <div class="themsp">
        <h3>thêm sản phẩm</h3>
        <form action="../../../admincp/index.php?admin=them-sp&action=add" method="POST">
            <div class="save">
                <input type="submit" name="save" value="" title="Lưu">
            </div>
            <div class="clear"></div>
            <div class="tensp">
                <label>Tên sản phẩm:</label>
                <input type="text" name="ten" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="clear"></div>
            <div class="imgsp">
                <label>Ảnh sản phẩm:</label>
                <input type="file" name="img">
            </div>
            <div class="clear"></div>
            <div class="giasp">
                <label>Giá sản phẩm:</label>
                <input type="number" name="gia" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="clear"></div>
            <div class="soluongton">
                <label>Số lượng:</label>
                <input type="number" name="soluongkho" placeholder="Nhập số lượng sản phẩm">
            </div>
            <div class="clear"></div>
            <div class="loaisp">
                <label>Thương hiệu: </label>
                <select name="thuonghieu">
                    <?php while ($row_thuonghieu = mysqli_fetch_array($mysql_thuonghieu)){?>
                        <option <?php if (!empty($row['thuonghieu'])) {?> selected <?php }?> value="<?=$row_thuonghieu['id']?>"><?=$row_thuonghieu['thuonghieu']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="clear"></div>
            <div class="itemsp">
                <label>Nhãn hiệu: </label>
                <select name="item">
                    <?php while ($row_nhanhieu = mysqli_fetch_array($mysql_nhanhieu)){?>
                        <option <?php if (!empty($row['nhanhieu'])) {?> selected <?php }?> value="<?=$row_nhanhieu['id']?>"><?=$row_nhanhieu['nhanhieu']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="clear"></div>
        </form>
    </div>
<?php }?>