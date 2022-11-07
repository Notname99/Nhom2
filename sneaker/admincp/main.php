<div class="cach"></div>
<?php
include 'main/menu.php';
if (isset($_GET['admin'])){
    $tam = $_GET['admin'];
}else{
    $tam = '';
}

if ($tam == 'user'){
    include ('main/taikhoan/taikhoan.php');
}elseif ($tam == 'sanpham'){
    include 'main/sanpham/sanpham.php';
}elseif ($tam == 'edit-tk'){
    include 'main/taikhoan/sua_tk.php';
}elseif ($tam == 'delete-tk'){
    include 'main/taikhoan/xoa_tk.php';
}elseif ($tam == 'delete-sp'){
    include ('main/sanpham/xoa_sp.php');
}elseif ($tam == 'donhang'){
    include ('main/donhang/donhang.php');
}elseif ($tam == 'them_sp'){
    include ('main/sanpham/them_sp.php');
}elseif ($tam == 'chitiet_dh'){
    include ('main/donhang/chitiet_dh.php');
}
else{
    include 'main/index.php';
}
?>
<div class="clear"></div>