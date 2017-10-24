<?php 
	
	$cat = isset($_GET['cat'])?$_GET['cat']:'';
	$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
	$topikQuery = $artikelQuery = '';
	if ($cat == 'all') {
		
		$topikQuery = $db->query("SELECT a.*,count(a.thread_id) as thread_view FROM v_thread a LEFT JOIN thread_view_log b ON a.thread_id = b.thread_id WHERE thread_title LIKE '".$keyword."%' GROUP BY a.thread_id ");
		$artikelQuery = $db->query("SELECT a.*,COUNT(a.article_id) as article_view FROM v_article a LEFT JOIN article_view_log b ON a.article_id = b.article_id WHERE article_title LIKE '".$keyword."%' GROUP BY a.article_id");
		$jumlahTopik = $topikQuery->num_rows;
		$jumlahArtikel = $artikelQuery->num_rows;
	
	} else if ($cat == 'forum') {
	
		$topikQuery = $db->query("SELECT a.*,count(a.thread_id) as thread_view FROM v_thread a LEFT JOIN thread_view_log b ON a.thread_id = b.thread_id WHERE thread_title LIKE '".$keyword."%' GROUP BY a.thread_id ");
		$jumlahTopik = $topikQuery->num_rows;
	
	}else if($cat == 'article'){
	
		$artikelQuery = $db->query("SELECT a.*,COUNT(a.article_id) as article_view FROM v_article a LEFT JOIN article_view_log b ON a.article_id = b.article_id WHERE article_title LIKE '".$keyword."%' GROUP BY a.article_id");
		$jumlahArtikel = $artikelQuery->num_rows;
	
	}
	
