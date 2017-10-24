<?php 
	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php';
	$auth = new Auth();
	$user_id = $auth->getSession('user_id');
	$photoQuery = $db->query("SELECT * FROM users_photo WHERE user_id = '$user_id' ORDER BY user_photo_id DESC ");
	if ($photoQuery->num_rows > 0) {
?>
<p><strong>Foto Anda:</strong></p>
<div class="panel panel-default" style="overflow:auto;height:300px;" >
	<div class="panel-body">
	   <!-- <div class="row"> -->
	   		<?php while($rowPhoto = $photoQuery->fetch_assoc()){ ?>
			<?php //for ($i=1; $i < 5; $i++) { ?> 
				<div class="col-lg-4" style="border: 1px solid #eee; padding:10px 30px 10px 30px;">
					<a href="javascript:void(0);" class="col-lg-12" id="photo-<?php echo $rowPhoto['user_photo_id'] ?>" onclick="selectPhoto(<?php echo $rowPhoto['user_photo_id'] ?>)" >
						<!-- <div class="panel panel-default" id="panel-photo-<?php echo $rowPhoto['user_photo_id'] ?>">
							<div class="panel-body"> -->
								<img src="<?php echo URL::Link('../../uploads/user_photo/'.$rowPhoto['photo_name']) ?>" class="img-responsive" style="height:100px;">
								<input type="hidden" id="photo-id-<?php echo $rowPhoto['user_photo_id'] ?>" value="<?php echo $rowPhoto['user_photo_id'] ?>">
							<!-- </div>
						</div> -->
					</a>
				</div>
			<?php //} ?>
			

			<?php } ?>
		<!-- </div> -->
	</div>
</div>
<?php } ?>