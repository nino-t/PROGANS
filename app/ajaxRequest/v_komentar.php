<?php 
include '../lib/Url.php';
include '../lib/Auth.php';
include '../config/config.php';
$auth = new Auth();	
$article_id = $_GET['id'];
$sql = "SELECT a.comment_id,a.comment,b.name,b.user_photo_id,c.photo_name,b.username FROM article_comment a 
			LEFT JOIN users b ON a.user_id = b.user_id
				LEFT JOIN users_photo c ON b.user_photo_id = c.user_photo_id
					WHERE article_id = $article_id AND reply_id = 0
						AND comment_sts = 1
						ORDER BY a.comment_id DESC";
$query = $db->query($sql);
if ($query->num_rows > 0 ) {
	$no=1;
	while($row = $query->fetch_assoc()){
		$user_photo = empty($row['photo_name'])?URL::Link('../../assets/images/user.png'):URL::Link('../../uploads/user_photo/'.$row['photo_name']);
		$sql_reply = "SELECT a.comment_id,a.comment,b.name,b.user_photo_id,c.photo_name,b.username FROM article_comment a 
			LEFT JOIN users b ON a.user_id = b.user_id
				LEFT JOIN users_photo c ON b.user_photo_id = c.user_photo_id
					WHERE article_id = $article_id AND reply_id = '$row[comment_id]'
						AND comment_sts = 1
						ORDER BY a.comment_id ASC";
		$reply = $db->query($sql_reply);
?>
<div id="cmn-<?php echo $no ?>">
	<div class="media">
	  <div class="media-left">
	    <a href="<?php echo URL::Link('../../profil/'.$row['username']) ?>">
	      <img class="media-object" width="100" height="100" src="<?php echo $user_photo ?>">
	    </a>
	  </div>
	  <div class="media-body">
	    <h4 class="media-heading"><a href="<?php echo URL::Link('../../profil/'.$row['username']) ?>"><?php echo $row['name'] ?></a></h4>
	    <?php echo $row['comment'] ?>
	    <p class="text-right">
	    	<button class="btn btn-default btn-xs" onclick="bukakomen_reply('<?php echo $no ?>')">Balas Komentar</button>
	    </p>
	  </div>
	</div>
	<?php 
		if($reply->num_rows > 0){
			while ($row2 = $reply->fetch_assoc()){
			$user_photo2 = empty($row2['photo_name'])?URL::Link('../../assets/images/user.png'):URL::Link('../../uploads/user_photo/'.$row2['photo_name']);
	?>
	<div class="col-lg-offset-1">
		<div class="media">
		  <div class="media-left">
		    <a href="<?php echo URL::Link('../../profil/'.$row2['username']) ?>">
		      <img class="media-object" width="100" height="100" src="<?php echo $user_photo2 ?>">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><a href="<?php echo URL::Link('../../profil/'.$row2['username']) ?>"><?php echo $row2['name'] ?></a></h4>
		    <?php echo $row2['comment'] ?>
		  </div>
		</div>
	</div>
	<?php }} ?>
	<div class="row" id="reply-<?php echo $no?>" style="display:none;">
	<?php if ($auth->guest()): ?>
		<p class="help-block" style="margin-left:60px;">Anda Harus Masuk Terlebih Dahulu</p>
	<?php else: ?>
		<div class="col-lg-12">
				<input type="hidden" id="reply-id-<?php echo $no?>" value="<?php echo $row['comment_id'] ?>">
				<div class="form-group">
					<label for="komentar">Balas Komentar</label>
					<p class="help-block">Anda Harus Masuk Terlebih Dahulu</p>
					<textarea name="komentar" id="komentar-<?php echo $no?>" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 tombol-komen">
						<button type="submit" onclick="save_reply(<?php echo $no ?>)" class="btn btn-primary">Komentar</button>
					</div>
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<button class="btn btn-default" onclick="init_reply('reply-<?php echo $no ?>','komentar-<?php echo $no ?>')">Batal</button>
					</div>
				</div>
		</div>
	<?php endif ?>
		
	</div>
</div>
	<?php $no++;} ?>
<?php }else{ ?>
<div class="well well-sm text-center">Tidak Ada Komentar</div>
<?php } ?>

