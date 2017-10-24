<!-- my product -->
<?php

	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php'; 
		 
	// data access default
	$auth = new Auth();

	$table 		 = 'thread_like';	
	$primaryKey  = 'like_id';
	$statusField = 'like_sts';	
	$wh_user	 = 'user_id';
	$thr_id		 = 'thread_id';
	$user_id 	 = $auth->getSession('user_id');	
	$thread_id_like = $_GET['id'];


	// data access default

	// for view notifikasi

	$all_like = $db->query("SELECT * FROM $table WHERE $thr_id = $thread_id_like AND $statusField = '1' ");	
	$not_number = $all_like->num_rows;	
?>
<?php if ($auth->guest()){ ?>
	<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><?php echo $not_number ?>
<?php }else{ 

	$cek_data_like = $db->query("SELECT * FROM $table WHERE $wh_user = $user_id AND $thr_id = $thread_id_like AND $statusField = '1' ");
	$row_like = $cek_data_like->fetch_assoc();
	$number_cek = $cek_data_like->num_rows; 

	if ($number_cek > 0) { ?> 
		<button onclick="likeArt()" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-up"></i> <?php echo $not_number ?> Batal Suka</button>
	<?php }else{ ?> 
		<button onclick="likeArt()" class="btn btn-default btn-xs"><i class="fa fa-thumbs-up"></i> <?php echo $not_number ?> </button>
	<?php } ?>

<?php } ?>




