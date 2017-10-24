<?php 
	include 'app/Artikel.php';
	$auth->required(URL::Link('masuk'));
	$title="Admin - Buat Artikel Baru";
?>
<div class="side-body padding-top">
	<form action="<?php echo URL::Current() ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
			<input type="hidden" name="act" value="<?php echo $act ?>">
			<input type="hidden" name="id" value="<?php echo $article_id ?>">
			<div class="form-group">
				<legend><h1>Buat Artikel Baru</h1></legend>
				<?php echo isset($errorCaptcha)?$errorCaptcha:''; ?>
				<?php echo isset($uploadError)?$uploadError:''; ?>
			</div>
			<?php if($act == "add"){ ?>
			<div class="form-group">
				<label for="kategori">Kategori</label>
				<select required name="kategori" class="form-control">
					<option value="">--Pilih Kategori--</option>
					<?php while($row = $list_category->fetch_assoc()){ ?>
						<option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>
						<?php 
							$subKategoriQuery = $db->query("SELECT category_id,category_name FROM category WHERE category_sts = 1 AND sub_category_id = '$row[category_id]'");
							while($rowSubKat = $subKategoriQuery->fetch_assoc()){
						?>
						<option value="<?php echo $rowSubKat['category_id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowSubKat['category_name'] ?></option>
						<?php } ?>
					<?php } ?>
				</select>
			</div>
			<?php } ?>
			
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" class="form-control"  name="judul" value="<?php echo $article_title ?>" required>
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="15" id="isi" name="isi" required><?php echo $article_content ?></textarea>
			</div>
			<div class="form-group">
				<label for="captcha">Gambar Artikel</label><br>
				<input type="file" name="gambar"><br>
				<?php if (isset($article_pict)): ?>
					<img src="<?php echo URL::Base().'../uploads/article_cover/'.$article_pict ?>" 
					alt="<?php echo $article_pict ?>"
					width="250" height="250">
				<?php endif ?>
			</div>
			<div class="form-group">
				<label for="provinsi">Provinsi</label>
				<select onchange="chain_combobox()" name="provinsi" id="provinsi" class="form-control" required>
					<option value="">--Pilih Provinsi--</option>
					<?php 
						$provinsiQuery = $db->query("SELECT * FROM master_provinsi");
						while($rowProvinsi = $provinsiQuery->fetch_assoc()){
					 ?>
						<option value="<?php echo $rowProvinsi['provinsi_id'] ?>"><?php echo $rowProvinsi['provinsi_nama'] ?></option>
					 <?php } ?>
				</select>
			</div>
			<div class="form-group" id="inputkab">
				<label for="kabupaten">Kabupaten</label>
				<select name="kabupaten" id="kabupaten" class="form-control" required></select>
			</div>

			<div class="form-group">
				<label for="lokasi_tempat">Lokasi Tempat</label>
				<input type="hidden" name="latitude" value="<?php echo $latitude ?>">
				<input type="hidden" name="longitude" value="<?php echo $longitude ?>">
				<div id="googleMaps" class="col-lg-12" style="height:500px"></div>
			</div>

			<div class="form-group">
				<label for="captcha">Kode Verifikasi</label><br>
				<img src="<?php echo URL::Link('../app/lib/captcha.php') ?>" alt=""><br><br>
				<input type="text" name="captcha" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary col-lg-12">
			</div>
	</form>
</div>

<script>
$("#inputkab").hide();
	function chain_combobox()
	{
		$("#kabupaten").html('<option value="">--Pilih Kabupaten--</option>');
		$.ajax({
			url : "<?php echo URL::Link('../app/ajaxRequest/chain_combobox.php') ?>",
			type:"POST",
			data:{provinsi : $("#provinsi").val()},
			success: function(data){
				var res = JSON.parse(data);
				$("#inputkab").fadeIn();
				$('#kabupaten').append(res.option);
				centerMap(res.lat,res.lng,7);
				// alert('lat : '+res.lat+' Long : '+res.lng);

			},
			error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
		})
	}

	function chain_combobox2()
	{
		
		$.ajax({
			url : "<?php echo URL::Link('app/ajaxRequest/chain_combobox2.php') ?>",
			type:"POST",
			data:{kabupaten : $("#kabupaten").val()},
			success: function(data){
				var res = JSON.parse(data);
				// alert(data);
				centerMap(res.lat,res.lng,10);

			},
			error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
		})
	}
	function showPosition()
	{
		var zoomProp, lat, lng;
		<?php
			if ($act == 'add') {
				$u_id = $auth->getSession('user_id'); 
				$getLatLngByUser = $db->query("SELECT b.latitude,b.longitude FROM users a LEFT JOIN master_kokab b ON a.kota_id = b.kota_id WHERE user_id = '$u_id' ");
				$rowCoor = $getLatLngByUser->fetch_assoc();
				if (empty($rowCoor['latitude']) || empty($rowCoor['longitude'])) {
					echo "zoomProp = 4;";
					echo "lat = -2.4177048;";
					echo "lng = 99.5388105;";
				} else {
					echo "zoomProp = 10;";
					echo "lat = " . $rowCoor['latitude'] . ";";
					echo "lng = " . $rowCoor['longitude'] . ";";
				}
			} else {
				
				if (empty($latitude) || empty($longitude)) {
					echo "zoomProp = 4;";
					echo "lat = -2.4177048;";
					echo "lng = 99.5388105;";
				} else {
					echo "zoomProp = 10;";
					echo "lat = " . $latitude . ";";
					echo "lng = " . $longitude . ";";
				}
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
                                        "<a href=\''.URL::Base().'../artikel/baca/'.$value['article_id'].'/'.$value['article_slug'].'\'>"+nama['.$i.']+"</a>"+
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
	        marker_icon = "<?php echo URL::Link('../uploads/map_icon/')?>"+ikon;        
	    }
	}
	google.maps.event.addDomListener(window, 'load', showPosition);
</script>  