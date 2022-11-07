<?php 
include './admincp/config/connect_db.php';

$sql_connet = mysqli_query($conn, "SELECT tb_sanpham.id, tb_sanpham.ten, tb_thuonghieu.thuonghieu, tb_thuonghieu.quanlythuonghieu, tb_nhanhieu.nhanhieu, tb_nhanhieu.quanlynhanhieu FROM tb_sanpham, tb_thuonghieu, tb_nhanhieu WHERE tb_sanpham.ma_thuonghieu=tb_thuonghieu.id AND tb_sanpham.ma_nhanhieu=tb_nhanhieu.id ORDER BY tb_sanpham.id ASC");
// $row = mysqli_fetch_array($sql_connet);

if (isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
}else{
    $tam = '';
}
if (isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = '';
}
if (isset($_GET['thuonghieu'])){
    $nho = $_GET['thuonghieu'];
}else{
    $nho = '';
}
while ($row = mysqli_fetch_array($sql_connet)){
    if ($tam == $row['quanlythuonghieu']){
        $ten = 'Giày '.$row['thuonghieu'];
    }
    if ($tam == $row['quanlynhanhieu']){
        $ten = 'Giày '.$row['nhanhieu'];
    }
    if ($tam == 'chitiet-sp'&&$nho==$row['quanlythuonghieu']&&$id==$row['id']){
        $ten = $row['ten'];
    }
}
if ($tam == 'cart'){
    $ten = 'Giỏ hàng';
}elseif ($tam == 'diachi'){
    $ten = 'Địa chỉ';
}elseif ($tam == 'hotro'){
    $ten = 'Hỗ trợ';
}elseif ($tam == 'huongdanmuahang'){
    $ten = 'Hướng dẫn mua hàng';
}elseif ($tam == 'kiemtradonhang'){
    $ten = 'Kiểm tra đơn hàng';
}
if ($tam == ''){
    $ten = 'Trang chủ';
}
?>