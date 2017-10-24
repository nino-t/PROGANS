<!-- my product -->
<?php

	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php'; 
		 
	// data access default
	$auth = new Auth();

	$table 		 = array(
						'0' => 'article',
						'1' => 'users',
						'2' => 'thread',
						'3' => 'master_provinsi'
					);
	$statusField = array(
						'0' => 'article_sts',
						'1' => 'user_sts',
						'2' => 'thread_sts',						
					);

	// data access default

	// for view number

	// artikel
	$all_art = $db->query("SELECT * FROM $table[0] WHERE $statusField[0] = '1' ");
	$number_art = $all_art->num_rows;
	// user
	$all_user = $db->query("SELECT * FROM $table[1] WHERE $statusField[1] = '1' ");	
	$number_user = $all_user->num_rows;
	// thread
	$all_thread = $db->query("SELECT * FROM $table[2] WHERE $statusField[2] = '1' ");
	$number_thread = $all_thread->num_rows;
	// provinsi
	$all_prov = $db->query("SELECT * FROM $table[3] ");
	$number_prov = $all_prov->num_rows;

	// for view number

?>
	<!-- tampil data -->

        <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
            <a href="<?php echo URL::Link('../../administrator/artikel') ?>">
                <div class="card red summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-share-alt fa-4x"></i>
                        <div class="content">
                            <div class="title"><?php echo $number_art; ?></div>
                            <div class="sub-title">Jumlah Artikel</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
            <a href="<?php echo URL::Link('../../administrator/pengguna') ?>">
                <div class="card yellow summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-group fa-4x"></i>
                        <div class="content">
                            <div class="title"><?php echo $number_user; ?></div>
                            <div class="sub-title">Jumlah Pengguna</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
            <a href="<?php echo URL::Link('../../administrator/topik') ?>">
                <div class="card green summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-comments fa-4x"></i>
                        <div class="content">
                            <div class="title"><?php echo $number_thread; ?></div>
                            <div class="sub-title">Jumlah Topik</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
        

	<!-- tampil data -->
