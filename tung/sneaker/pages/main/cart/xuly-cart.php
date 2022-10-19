<?php
include './admincp/config/connect_db.php';

if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}
if (isset($_GET['action'])){
    function update_cart($add=false){
        foreach ($_POST['soluong'] as $id => $soluong) {
            if ($soluong == 0){
                unset($_SESSION["cart"][$id]);
            }else{
                if ($add){
                    $_SESSION["cart"][$id] += $soluong;
                }else{
                    $_SESSION["cart"][$id] = $soluong;
                }
            }
        }
    }
    switch($_GET['action']){
        case "add":
            update_cart(true);
            break;
        case "delete":
            if (isset($id)){
                unset($_SESSION["cart"][$id]);
            }
            break;
        case "submit":
            if (isset($_POST['update_click'])){
                update_cart(); 
            }elseif (isset($_POST['order_click'])){
                echo 'Đặt hàng';
            }
            break;
    }
}
if (!empty($_SESSION["cart"])){
    //sản phẩm
    $query = "SELECT * FROM `tb_sanpham` WHERE `id` IN (".implode(",", array_keys($_SESSION["cart"])).") ORDER BY `id` ASC";
    $mysql = mysqli_query($conn, $query);
    include 'cart.php';
}else{
    include 'null-cart.php';
}
?>