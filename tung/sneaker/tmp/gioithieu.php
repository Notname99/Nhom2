<div class="gioithieu">
    <?php 
    if ($tam=='Adidas') {
        include("gioithieu/Adidas.php");
    }elseif ($tam=='SuperStar') {
        include("gioithieu/SuperStar.php");
    }elseif ($tam=='Stan-Smith') {
        include("gioithieu/StanSmith.php");
    }elseif ($tam=='Alphabounce') {
        include("gioithieu/Alphabounce.php");
    }elseif ($tam=='NMD') {
        include("gioithieu/NMD.php");
    }elseif ($tam=='Prophere') {
        include("gioithieu/Prophere.php");
    }elseif ($tam=='Ultraboost') {
        include("gioithieu/Ultraboost.php");
    }elseif ($tam=='Falcon') {
        include("gioithieu/Falcon.php");
    }elseif ($tam=='Yeezy') {
        include("gioithieu/Yeezy.php");
    }elseif ($tam=='Nike') {
        include("gioithieu/Nike.php");
    }elseif ($tam=='AirForce1') {
        include("gioithieu/AirForce1.php");
    }elseif ($tam=='Jordan') {
        include("gioithieu/Jordan.php");
    }elseif ($tam=='AirMax') {
        include("gioithieu/AirMax.php");
    }elseif ($tam=='AirMax97') {
        include("gioithieu/AirMax97.php");
    }elseif ($tam=='AirMax270') {
        include("gioithieu/AirMax270.php");
    }elseif ($tam=='AirMax90') {
        include("gioithieu/AirMax90.php");
    }elseif ($tam=='M2KTekno') {
        include("gioithieu/M2KTekno.php");
    }elseif ($tam=='Uptempo') {
        include("gioithieu/Uptempo.php");
    }else {
        include("./pages/main/index.php");
    }
    ?>
</div>