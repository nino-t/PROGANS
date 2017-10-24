<!-- my product -->
<?php

	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php'; 
		 
	// data access default
	$auth = new Auth();

    $table      = 'article';
    $primaryKey = 'article_id';    
    $uploadError = '';
    $statusField = 'article_sts';

	// data access default
    
    // access data
    if(isset($_POST["id"]) && !empty($_POST["id"])){

        // hitung data rata number
        $query_all = $db->query("SELECT COUNT(*) as num_rows FROM $table WHERE $primaryKey < ".$_POST['id']." ORDER BY $primaryKey DESC");

        $row = $query_all->fetch_assoc();        

        $allRows = $row['num_rows'];

        $limit = 4;

        // ambil num_rows
        $query = $db->query("SELECT * FROM article JOIN users ON article.user_id = users.user_id WHERE $primaryKey < ".$_POST['id']." ORDER BY $primaryKey DESC LIMIT ".$limit);
        ?>

        <?php if ($query->num_rows > 0): ?>

            <?php while($row = $query->fetch_assoc()){ 
                $article_pict = !empty($row['article_pict'])?URL::Base().'../../uploads/article_cover/'.$row['article_pict']:URL::Link('../../assets/images/no-image.jpg'); ?>
                <a href="<?php echo URL::Link('../../artikel/baca/'.$row['article_id'].'/'.$row['article_slug']); ?>">
                    <li>
                        <?php $art_id = $row['article_id']; ?>
                        <img src="<?php echo $article_pict ?>" class="profile-img pull-left">
                        <div class="message-block">
                            <div><span class="username"><?php echo $row['name'] ?></span> <span class="message-datetime"><?php echo $row['created_at']; ?></span>
                            </div>
                            <div class="message"><?php echo substr($row['article_content'], 0,100) ?></div>
                        </div>
                    </li>
                </a>        
            <?php } ?>        
                <a href="#" id="message-load-more">
                    <li class="text-center load-more show_more_main" id="show_more_main<?php echo $art_id; ?>">                                                                                
                        <span id="<?php echo $art_id; ?>" class="show_more" title="Load more posts"><i class="fa fa-refresh"></i>  Show more...</span>
                        <span class="loding" style="display: none;"><span class="loding_txt"><i class="fa fa-refresh"></i>  Loading...</span></span>                                        
                    </li>
                </a>                                

        <?php else: ?>

            <div class="well well-sm">
                <div class="text-center">Tidak Ada Data</div>   
            </div>

        <?php endif; ?>
    <?php } ?>