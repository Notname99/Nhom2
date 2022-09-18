<div class="main">
    <?php
    include './admincp/config/connect_db.php';

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
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = '';
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
    }elseif ($tam=='Prophere'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/Prophere/Prophere-index.php");
    }elseif ($tam=='Ultraboost'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/Ultraboost/Ultraboost-index.php");
    }elseif ($tam=='Falcon'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/Falcon/Falcon-index.php");
    }elseif ($tam=='Yeezy'){
        include("./pages/loc.php");
        include("./tmp/Adidas/components/Yeezy/Yeezy-index.php");
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
    }elseif ($tam=='page1'){
        include("./pages/loc.php");
        include("./tmp/Adidas/Adidas-index.php");
    }elseif ($tam=='page2'){
        include("./pages/loc.php");
        include("./tmp/Adidas/Adidas-index.php");
    }elseif ($tam=='page3'){
        include("./pages/loc.php");
        include("./tmp/Adidas/Adidas-index.php");
    }
    else{
        include("./pages/loc.php");
        include("./pages/main/index.php");
        include("./pages/index_gt.php");
    }

    $chitiet = 0;
    if ($page==1){
        for ($i = 1; $i <=  12; $i++) {
            $query = "SELECT * FROM tb_adidas WHERE id=$i ORDER BY id ASC";
            $mysql = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($mysql)){
                $chitiet++;
                if ($tam==$chitiet){
                    include("./pages/main/chitiet.php");
                }
            }
        }
    }elseif ($page==2){
        for ($i = 13; $i <=  24; $i++) {
            $query = "SELECT * FROM tb_adidas WHERE id=$i ORDER BY id ASC";
            $mysql = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($mysql)){
                $chitiet++;
                if ($tam==$chitiet){
                    include("./pages/main/chitiet.php");
                }
            }
        }
    }else{
        for ($i = 25; $i <=  29; $i++) {
            $query = "SELECT * FROM tb_adidas WHERE id=$i ORDER BY id ASC";
            $mysql = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($mysql)){
                $chitiet++;
                if ($tam==$chitiet){
                    include("./pages/main/chitiet.php");
                }
            }
        }
    }
    ?>
</div>