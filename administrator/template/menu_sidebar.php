<?php
    if(empty($_GET["page"])){ 
            $dashboard = "class='active'";
            $kategori = "";
            $artikel = "";
            $thread = "";
            $komentar = "";
            $user = "";
            $komentar = "";
    }else if($_GET["page"]=="dashboard" ||
             $_GET["page"]=="detail_art"){
            $dashboard = "class='active'";
            $kategori = "";
            $artikel = "";
            $thread = "";
            $komentar = "";
            $user = "";
            $komentar = "";
    }else if($_GET["page"]=="kategori" ||
            $_GET["page"]=="kategori_baru"){
            $dashboard = "";
            $kategori = "class='active'";
            $artikel = "";
            $thread = "";
            $komentar = "";
            $user = "";
            $komentar = "";
    }else if($_GET["page"]=="artikel" ||
            $_GET["page"]=="artikel_baru"){
            $dashboard = "";
            $kategori = "";
            $artikel = "class='active'";
            $thread = "";
            $komentar = "";
            $user = "";
            $komentar = "";
    }else if($_GET["page"]=="topik" ||
            $_GET["page"]=="topik_baru"){
            $dashboard = "";
            $kategori = "";
            $artikel = "";
            $thread = "class='active'";
            $komentar = "";
            $user = "";
            $komentar = "";
    }else if($_GET["page"]=="pengguna" ||
            $_GET["page"]=="pengguna_baru"){
            $dashboard = "";
            $kategori = "";
            $artikel = "";
            $thread = "";
            $komentar = "";
            $user = "class='active'";
            $komentar = "";
    }else if($_GET["page"]=="komentar" ||
            $_GET["page"]=="komentar_baru"){
            $dashboard = "";
            $kategori = "";
            $artikel = "";
            $thread = "";
            $komentar = "";
            $user = "";
            $komentar = "class='active'";            
    }else{
            $dashboard = "class='active'";
            $kategori = "";
            $artikel = "";
            $thread = "";
            $komentar = "";
            $user = "";
            $komentar = "";           
    }    
?>
<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <div class="icon fa fa-paper-plane"></div>
                    <div class="title">Admin Kesini.Com</div>
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs"> 
                    <i class="fa fa-times icon"></i>
                </button> 
            </div>
            <ul class="nav navbar-nav">
                <li <?php echo $dashboard;?>> 
                    <a href="<?php echo URL::Link('beranda') ?>">
                        <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                    </a>
                </li>
                <li <?php echo $kategori;?>> 
                    <a href="<?php echo URL::Link('kategori') ?>">
                        <span class="icon fa fa-list-alt"></span><span class="title">Kategori</span>
                    </a>
                </li>
                <li <?php echo $artikel;?>> 
                    <a href="<?php echo URL::Link('artikel') ?>">
                        <span class="icon fa fa-share-alt"></span><span class="title">Artikel</span>
                    </a>
                </li>
                <li <?php echo $thread;?>> 
                    <a href="<?php echo URL::Link('topik') ?>">
                        <span class="icon fa fa-comments"></span><span class="title">Topik</span>
                    </a>
                </li>
                <li <?php echo $user;?>> 
                    <a href="<?php echo URL::Link('pengguna') ?>">
                        <span class="icon fa fa-group"></span><span class="title">Pengguna</span>
                    </a> 
                </li>
                <li <?php echo $komentar;?>> 
                    <a href="<?php echo URL::Link('komentar') ?>">
                        <span class="icon fa fa-comment"></span><span class="title">Komentar</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>