<?php

	include 'app/lib/Viewer.php';
	include 'app/lib/Slug.php';
	$slug = $_GET['slug'];
	$article_id = $_GET['id'];
	$article = $db->query("SELECT * FROM v_article WHERE article_id = '$article_id' ");
	$row = $article->fetch_assoc();
	$title = $row['article_title'];

// variabel tambahan
	$table 		 = 'article_like';	
	$primaryKey  = 'like_id';
	$statusField = 'like_sts';	
	$wh_user	 = 'user_id';
	$art_id		 = 'article_id';
	$user_id 	 = $auth->getSession('user_id');	
	$article_id_like = $row['article_id'];
	$article_pict = !empty($row['article_pict'])?URL::Base().'/uploads/article_cover/'.$row['article_pict']:URL::Link('assets/images/no-image.png');
	$user_pict    = !empty($row['photo_name'])?URL::Base().'/uploads/user_photo/'.$row['photo_name']:URL::Link('assets/images/user.png');
// variabel tambahan
	$userQuery = $db->query("SELECT *,(SELECT count(article_id) FROM article WHERE user_id = '$row[user_id]' AND article_sts = '1') as jumlahArtikel,
	 							(SELECT count(thread_id) FROM thread WHERE user_id = '$row[user_id]' AND thread_sts = '1') as jumlahTopik 
								FROM users WHERE user_id = '$row[user_id]' ");
	$rowUser = $userQuery->fetch_assoc();
	Viewer::Article($db,$row['article_id']);

?>
<div id="subheader" data-type="background" data-speed="3">
    <div id="subheader-inner" class="inner-block">
        <div class="site-name"><a href="<?php echo URL::Link('artikel/baca/'.$row['article_id'].'/'.$row['article_slug']); ?>"><?php echo $row['article_title'] ?></a></div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="top-section"></div>
    <div class="container main-content-area">
    	<div class="row">
    		<div class="col-lg-7 content">
		        <p>
		            <img src="<?php echo $article_pict ?>" class="img-responsive" alt="<?php echo $row['article_pict'] ?>">
		        </p>
		        <div class="article-content">
		            <?php echo $row['article_content'] ?>
		        </div>
		        <hr>
		        <p>
			        <a href="<?php echo URL::Link('artikel/k/'.$row['kota_id']) ?>"><span class="label label-success"><i class="fa fa-map-marker"></i> <?php echo $row['kokab_nama'] ?></span></a>
			        <a href="<?php echo URL::Link('artikel/p/'.$row['provinsi_id']) ?>"><span class="label label-success"><i class="fa fa-map-marker"></i> <?php echo $row['provinsi_nama'] ?></span></a>
			        <a href="<?php echo URL::Link('artikel/c/'.$row['category_id']) ?>"><span class="label label-primary"><i class="fa fa-bars"></i> <?php echo $row['category_name'] ?></span></a>
		        </p>
		        <div class="text-left">
			        <!-- komit -->
		        	<ul class="share">
		        		<li><div id="like"></div></li>
		        		<li><div class="g-plus" data-action="share" data-annotation="bubble"></div></li>
		        		<li>
					        <div class="fb-share-button" 
					                data-href="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" 
					                data-layout="button">
					        </div>			        			
		        		</li>
		        		<li>
		        			<a class="twitter-share-button"
							  href="https://twitter.com/intent/tweet">
							Tweet</a>
		        		</li>
		        		<div class="clearfix"></div>
		        	</ul>		  
		        	<!-- komit -->     
		        </div>
		        <hr>
		        
		        <div class="row">
		        	<div class="col-lg-12">Lokasi</div>
			        <div id="googleMaps" class="col-lg-12" style="height:500px"></div>
		        </div>
		        <br><br>
    		</div>
    		<div class="col-lg-5 side" id="content">
				<div class="panel panel-default">
					<div class="panel-body">

	    			   		<div>
	    			   			<img src="<?php echo $user_pict ?>" alt="<?php echo $row['photo_name'] ?>" class="img-circle col-lg-4 col-md-4 col-sm-4 col-xs-4">
	    			   			<a href="<?php echo URL::Link('profil/'.$row['username']); ?>"><?php echo $rowUser['name'] ?></a><br>
	    			   			<small>Bergabung pada : <?php echo date("d-m-Y",strtotime($rowUser['registered_at'])) ?></small><br>
	    			   			<small>Jumlah Artikel : <?php echo $rowUser['jumlahArtikel'] ?></small><br>
	    			   			<small>Jumlah Topik : <?php echo $rowUser['jumlahTopik'] ?></small><br>
	    			   		</div>
	    			   		
					</div>
				</div>

    			<div class="panel panel-default">
					  <div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-list"></i> Kategori</h3>
					  </div>
						<ul class="list-group">
							<?php 
								$categoryQuery = $db->query("SELECT category_id,sub_category_id,category_name 
															 FROM category 
															 WHERE category_sts = 1 AND sub_category_id = 0");
								while($rowCat = $categoryQuery->fetch_assoc()){
							?>
								<a href="<?php echo URL::Link('artikel/c/'.$rowCat['category_id']) ?>" class="list-group-item">
									<?php echo $rowCat['category_name'] ?>
								</a>
							<?php } ?>
						</ul>
				</div>
                <div class="panel panel-primary">
					  <div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-list"></i> Artikel Populer</h3>
					  </div>
						<ul class="list-group">
							<?php 
								$popularQuery = $db->query("SELECT article_id,article_slug,article_title,
														 article_content,jumlahViewer,jumlahLike
														FROM v_article 
														WHERE article_sts = 1
														ORDER BY jumlahViewer DESC,jumlahLike DESC LIMIT 5;"); 
								while($rowPop = $popularQuery->fetch_assoc()){
							     $article_pict = !empty($rowPop['article_pict'])?URL::Base().'/uploads/article_cover/'.$rowPop['article_pict']:URL::Link('assets/images/no-image.jpg');
                            ?>
                            <li class="list-group-item">
                                
                            
                            <div class="media" style="margin-top:-30px;">
                              
                              <div class="media-body">
                                <h4 class="media-heading" style="padding-top:30px;">
                                    <a  href="<?php echo URL::Link('artikel/baca/'.$rowPop['article_id'].'/'.$rowPop['article_slug']) ?>" >
                                        <?php echo $rowPop['article_title'] ?> 
                                    </a>
                                </h4>
                                <?php echo substr($rowPop['article_content'], 0,60) ?>
                              </div>
                            </div>
								
							</li>	
							<?php } ?>
							
						</ul>
				</div>
    		</div>
    	</div>
        
    </div>
    <div class="container main-content-area content">
        <h3>Jejak Pembaca</h3><hr>
        <button type="button" onclick="bukakomen()" class="btn btn-primary">Tinggalkan Jejak</button>
        <div class="row" id="buatkomen">
        	<?php if ($auth->guest()): ?>
                <p class="help-block" style="margin-left:10px;">Anda Harus Masuk Terlebih Dahulu</p>
        	<?php else: ?>
	            <div class="col-lg-12">
	                <div class="form-group">
	                    <label for="komentar">Komentar</label>
	                    <textarea name="komentar" id="komentar" class="form-control" cols="30" rows="10"></textarea>
	                </div>
	                <div class="form-group">
	               		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 tombol-komen">
		                    <button type="submit" onclick="save_komen()" class="btn btn-primary">Komentar</button>
	               		</div>
	               		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		                    <button class="btn btn-default" onclick="init()">Batal</button>
	               		</div>
	                </div>
	            </div>
        	<?php endif ?>
        </div>
        <div id="komen" style="margin-top:10px;"></div>
    </div>
<script>
	var inputKomen = $("#komentar");
	

    // function auto load
    function loadLike() {        
        $.get("<?php echo URL::Link('app/ajaxRequest/Cek_like.php'."?id=".$row['article_id']); ?>",function(data){
        	$("#like").html(data);
        });
    }
    
    
    // function auto load

    // function auto load list
    function likeArt() {        
		$.get('<?php echo URL::Link('app/ajaxRequest/Like_Art.php'."?id=".$row['article_id']); ?>',
			function(data){					
				loadLike();					
			}
		);
    }    			    




	function load_komen(){
		$("#komen").fadeIn();
		$.get('<?php echo URL::Link('app/ajaxRequest/v_komentar.php'."?id=".$row['article_id']); ?>',
			function(data){
				$("#komen").html(data);
			}
		);
	}

	// function load_komen2()
	// {
	// 	x = document.getElementById("komen").innerHTML;
	// 	document.getElementById("komen").innerHTML = x;
	// }
	
	function save_komen(){
		<?php if ($auth->guest()) { ?>			
			window.location = "<?php echo URL::Base() ?>masuk";
		<?php } else { ?>
			$.post(
				'<?php echo URL::Link('app/ajaxRequest/save_komentar.php'); ?>',
				{id:'<?php echo $row['article_id'] ?>',komentar:inputKomen.val()},
				function(data){
					response = JSON.parse(data);
					init();
					load_komen();
					sendNotif();
				}
			);
		<?php } ?>
		
		
	}
	function init(){
		$("#buatkomen").fadeOut();
		inputKomen.val('');
	}
	function init_reply(id,kom_id){
		$("#"+id).fadeOut();
		$("#"+kom_id).val('');
	}

	function bukakomen_reply(id)
	{
		$("#komentar-"+id).val('');
		$("#reply-"+id).fadeIn();
	}

	function bukakomen()
	{
		inputKomen.val('');
		$("#buatkomen").fadeIn();
	}
	
	function save_reply(no)
	{
		<?php if ($auth->guest()) { ?>			
			window.location = "<?php echo URL::Base() ?>masuk";
		<?php } else { ?>
			var inputReply =  $("#komentar-"+no).val();
			var reply_ID    =  $("#reply-id-"+no).val();
			$.post('<?php echo URL::Link('app/ajaxRequest/save_komentar.php'); ?>',
				{reply_id:reply_ID,id:'<?php echo $row['article_id'] ?>',komentar:inputReply},
				function(data){
					$("#reply-"+no).fadeOut();
					load_komen();
					sendNotif();
				})
		<?php } ?>
		
	}
	$("#buatkomen").hide();
	load_komen();
	loadLike();

	function showPosition()
	{
		var zoomProp, lat, lng;
		<?php
			$getLatLngByArticle = $db->query("SELECT latitude,longitude FROM v_article WHERE article_id = '$article_id' ");
			$rowCoor = $getLatLngByArticle->fetch_assoc();
			if (empty($rowCoor['latitude']) || empty($rowCoor['longitude'])) {
				echo "zoomProp = 4;";
				echo "lat = -2.4177048;";
				echo "lng = 99.5388105;";
			} else {
				echo "zoomProp = 12;";
				echo "lat = " . $rowCoor['latitude'] . ";";
				echo "lng = " . $rowCoor['longitude'] . ";";
			}
			
		?>
		var coordinate = new google.maps.LatLng(lat, lng);
		var mapProp = {
		  disableDoubleClickZoom: true,
		  center:coordinate,
		  zoom: zoomProp,
		  mapTypeId: google.maps.MapTypeId.ROADMAP,
		};

		map = new google.maps.Map(document.getElementById("googleMaps"),mapProp);
		google.maps.event.addListener(map, 'dblclick', function(event) {
		    latitude = event.latLng.lat();
		    longtitude = event.latLng.lng();
		    deleteMarkers();
		    placeMarker(event.latLng);
		    $('[name=latitude]').val(latitude);
		    $('[name=longitude]').val(longtitude);

		});
		
		ambildatabase();
	}

	function ambildatabase(){
	    // kita bikin dulu array marker dan content info
	    var markers = [];
	    var info = [];
		var nama     = new Array();
		var x        = new Array();
		var y        = new Array();
		var i;
		var url; 
		

	    
	    <?php 
	    // Query data
	    $query = $db->query("SELECT * FROM `v_article` WHERE `article_sts` = 1 ");

	    $i = 0;
	    $js = "";

	    // kita lakuin looping datanya disini
	    while($value = $query->fetch_assoc()){

	    $js .= 'nama['.$i.'] = "'.$value['article_title'].'";
	            x['.$i.'] = "'.$value['latitude'].'";
	            y['.$i.'] = "'.$value['longitude'].'";
	            set_icon("'.$value['map_icon'].'");
	            
	            // kita set dulu koordinat markernya
	            var point = new google.maps.LatLng(parseFloat(x['.$i.']),parseFloat(y['.$i.']));

	            // disini kita masukin konten yang akan ditampilkan di InfoWindow
	            var contentString = "<div style=\'color:#777\'>"+
	            						"<a href=\''.URL::Link("artikel/baca/".$value["article_id"].'/'.$value["article_slug"]).'\'>"+nama['.$i.']+"</a>"+
	            					"</div>";

	            var infowindow = new google.maps.InfoWindow({
	                content: contentString,
	                maxWidth: 350
	            });
	            

	            tanda = new google.maps.Marker({
	                    position: point,
	                    map: map,
	                    icon: marker_icon,
	                    clickable: true
	                });
	            
	           
	            // nah, disini kita buat marker dan infowindow-nya kedalam array
	            markers.push(tanda);
	            info.push(infowindow);

	            // ini fungsi untuk menampilkan konten infowindow kalo markernya diklik
	            google.maps.event.addListener(markers['.$i.'], "click", function() { info['.$i.'].open(map,markers['.$i.']); });

	            

	            ';

	    
	        $i++;  
	    }

	    // kita tampilin deh output jsnya :D
	    echo $js;
	    ?>
	    
	    // nah untuk yang satu ini...kita push semua markernya kedalam array untuk dikelompokan
	    var markerCluster = new MarkerClusterer(map, markers);

	}

	function set_icon(ikon){
	    if (ikon == "") {
	      return false;
	    } else {
	        marker_icon = "<?php echo URL::Link('uploads/map_icon/')?>"+ikon;        
	    }
	}
	google.maps.event.addDomListener(window, 'load', showPosition);        
</script>
