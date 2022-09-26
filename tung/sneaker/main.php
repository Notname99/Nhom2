<div class="main">
    <?php

    if (isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = '';
    }
    // if ($tam=='Adidas'){
    //     include("./pages/main/thuong-hieu.php");
    //     include("./tmp/index-sp.php");
    // }else
    if ($tam=='diachi'){
        include("./pages/main/diachi.php");
    }elseif ($tam=='cart'){
        include("./pages/main/cart.php");
    }elseif ($tam=='page1'){
        include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }elseif ($tam=='page2'){
        include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }elseif ($tam=='page3'){
        include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }
    else{
        include("./pages/main/index.php");
    }
    ?>
</div>