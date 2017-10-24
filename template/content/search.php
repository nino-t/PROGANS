<?php include 'app/Search.php'; ?>
<div id="subheader" data-type="background" data-speed="3">
    <div id="subheader-inner" class="inner-block">
        <div class="site-name">Pencarian Kesini.com</div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="top-section"></div>

    <div class="container main-content-area">
<?php if($cat == "all"){ ?>
<div class="panel panel-default">
	  <div class="panel-heading">
			<h3 class="panel-title">Hasil Pencarian Topik : <?php echo $jumlahTopik; ?></h3>
	  </div>
	<div id="hasilTopik"></div>
</div>
<div class="panel panel-default">
	  <div class="panel-heading">
			<h3 class="panel-title">Hasil Pencarian Artikel : <?php echo $jumlahArtikel; ?></h3>
	  </div>
	  <div id="hasilArtikel"></div>
</div>
<?php }else if($cat == "forum"){ ?>
<div class="panel panel-default">
	  <div class="panel-heading">
			<h3 class="panel-title">Hasil Pencarian Topik : <?php echo $jumlahTopik; ?></h3>
	  </div>
	<div id="hasilTopik"></div>
</div>
<?php }else if($cat == "article"){ ?>
<div class="panel panel-default">
	  <div class="panel-heading">
			<h3 class="panel-title">Hasil Pencarian Artikel : <?php echo $jumlahArtikel; ?></h3>
	  </div>
	  <div id="hasilArtikel"></div>
</div>
<?php } ?>
	</div>
</div>
<script>
	
function load_cari_topik_ajax()
{
	
	url = "<?php echo URL::Link('app/ajaxRequest/paging_search_topik.php?hal=&keyword='.$keyword) ?>";
	$.get(url,function(data){
		$("#hasilTopik").html(data);
	});
}

function page_topik(page){
	url = "<?php echo URL::Link('app/ajaxRequest/paging_search_topik.php?keyword='.$keyword.'&hal=') ?>"+page;
	$.get(url,function(data){
		$("#hasilTopik").html(data);
	});
}

function load_cari_artikel_ajax()
{
	
	url = "<?php echo URL::Link('app/ajaxRequest/paging_search_artikel.php?hal=&keyword='.$keyword) ?>";
	$.get(url,function(data){
		$("#hasilArtikel").html(data);
	});
}

function page_artikel(page){
	url = "<?php echo URL::Link('app/ajaxRequest/paging_search_artikel.php?keyword='.$keyword.'&hal=') ?>"+page;
	$.get(url,function(data){
		$("#hasilArtikel").html(data);
	});
}
load_cari_artikel_ajax();
load_cari_topik_ajax();
</script>