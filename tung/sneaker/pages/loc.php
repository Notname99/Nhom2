<div class="cach"></div>
<?php
    // include ("main/thuong-hieu.php");
    if ($tam=='Adidas' || $tam=='page1' || $tam=='page2' || $tam=='page3'){
        $thuong_hieu = 'Adidas';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='SuperStar'){
        $thuong_hieu = 'Adidas Super Star';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Stan-Smith'){
        $thuong_hieu = 'Adidas Stan Smith';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Alphabounce'){
        $thuong_hieu = 'Adidas Alphabounce';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='NMD'){
        $thuong_hieu = 'Adidas NMD';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Prophere'){
        $thuong_hieu = 'Adidas Prophere';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Ultraboost'){
        $thuong_hieu = 'Adidas Ultraboost';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Falcon'){
        $thuong_hieu = 'Adidas Falcon';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Yeezy'){
        $thuong_hieu = 'Adidas Yeezy';
        $nhan_hieu = 'Adidas';
    }elseif ($tam=='Nike'){
        $thuong_hieu = 'Nike';
        $nhan_hieu = 'Nike';
    }elseif ($tam=='Air-Force-1'){
        $thuong_hieu = 'Nike Air Force 1';
        $nhan_hieu = 'Nike';
    }elseif ($tam=='Jordan'){
        $thuong_hieu = 'Nike Jordan';
        $nhan_hieu = 'Nike';
    }elseif ($tam=='Air-Max'){
        $thuong_hieu = 'Nike Air Max';
        $nhan_hieu = 'Nike';
    }elseif ($tam=='M2K-Tekno'){
        $thuong_hieu = 'Nike M2K Tekno';
        $nhan_hieu = 'Nike';
    }
?>
<h1 class="thuong_hieu"><?=$thuong_hieu?></h1>
<div class="loc">
    <div>
        <div class="ltth">
            <h5>Lọc theo thương hiệu</h5>
            <a href="#"><?=$nhan_hieu?> ()</a><br><br>
        </div>
        <div class="loc-size">
            <h5>Lọc theo size</h5>
            <a href="#">35 ()</a>
            <a href="#">36 ()</a>
            <a href="#">37 ()</a>
            <a href="#">38 ()</a>
            <a href="#">39 ()</a>
            <a href="#">40 ()</a>
            <a href="#">41 ()</a>
            <a href="#">42 ()</a>
            <a href="#">43 ()</a>
            <a href="#">44 ()</a><br>
        </div>
        <div class="loc-mau">
            <h5>Lọc theo màu sắc</h5>
            <a href="#">Trắng kem ()</a>
            <a href="#">Cam ()</a>
            <a href="#">Da trời ()</a>
            <a href="#">Đen ()</a>
            <a href="#">Đỏ ()</a>
            <a href="#">Nâu ()</a>
            <a href="#">Navy ()</a>
            <a href="#">Tím ()</a>
            <a href="#">Trắng ()</a>
            <a href="#">Vàng ()</a>
            <a href="#">Xám ()</a>
            <a href="#">Xanh lá ()</a>
            <a href="#">Nhiều màu ()</a><br>
        </div>
        <div class="loc-gia">
            <h5>Lọc theo giá</h5>
            <a href="#">1tr - 2tr ()</a>
            <a href="#">500K - 999K ()</a>
        </div>
    </div>
</div>