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
    if ($tam=='Adidas' || $tam=='SuperStar' || $tam=='Stan-Smith'|| $tam=='Alphabounce' || $tam=='NMD' || $tam=='Prophere' || $tam=='Ultraboost'|| $tam=='Falcon' || $tam=='Yeezy' || $tam=='Nike' || $tam=='AirForce1'|| $tam=='Jordan' || $tam=='AirMax' || $tam=='AirMax97' || $tam=='AirMax270'|| $tam=='AirMax90' || $tam=='M2KTekno'|| $tam=='Uptempo'){
        // include("./pages/main/thuong-hieu.php");
        include("./tmp/index-sp.php");
    }elseif ($tam=='diachi'){
        include("./pages/main/diachi.php");
    }elseif ($tam=='hotro') {
        include("./pages/main/thuong-hieu.php");
        include("./pages/main/hotro.php");
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