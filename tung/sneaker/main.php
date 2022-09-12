<div class="main">
    <?php
    if (isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
    if ($tam=='Adidas'){
        include("./pages/loc.php");
        include("./tmp/Adidas/Adidas-index.php");
    }elseif ($tam=='SuperStar'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/SuperStar/SuperStar-index.php");
    }elseif ($tam=='Stan-Smith'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/StanSmith/Stan-Smith-index.php");
    }elseif ($tam=='Alphabounce'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/Alphabounce/Alphabounce-index.php");
    }elseif ($tam=='NMD'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/NMD/NMD-index.php");
    }elseif($tam=='Nike'){
        include("./pages/loc.php");
        include("./tmp/Nike/Nike-index.php");
    }elseif ($tam=='Air-Force-1'){
        include("./pages/loc.php");
        include("./tmp/Nike/components/Air-Force-1/Air-Force-1-index.php");
    }elseif ($tam=='Jordan'){
        include("./pages/loc.php");
        include("./tmp/Nike/components/Jordan/Jordan-index.php");
    }elseif ($tam=='Air-Max'){
        include("./pages/loc.php");
        include("./tmp/Nike/components/Air-Max/Air-Max-index.php");
    }elseif ($tam=='M2K-Tekno'){
        include("./pages/loc.php");
        include("./tmp/Nike/components/M2K-Tekno/M2K-Tekno-index.php");
    }elseif ($tam=='diachi'){
        include("./pages/main/diachi.php");
    }elseif ($tam=='cart'){
        include("./pages/main/cart.php");
    }
    else{
        include("./pages/main/index.php");
    }
    ?>
</div>