<?php $title = "Kesini.com - Beranda"; ?>

<!-- ANIMASI CSS -> style.css -->
<section id="scroll-home">
    <div class="background-animasi">
        <div class="kumpulan-balon">
            <img src="<?php echo URL::Base() ?>assets/images/flat-icon/balon.png" alt="" class="balon">
            <img src="<?php echo URL::Base() ?>assets/images/flat-icon/balon.png" alt="" class="balon2">         
        </div>
        <!-- .... CAROUSEL di style.css -->      
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                  <div class="carousel-caption">
                    <h3 data-animation="animated bounceInLeft" class="carousel-text">
                        SELAMAT DATANG
                    </h3>
                    <h3 data-animation="animated bounceInRight">
                        KENALKAN DAN CARI TAHU BUDAYAMU!
                    </h3>
                </div>
              </div>

              <div class="item">
                  <div class="carousel-caption">
                      <h3 data-animation="animated flipInX">
                          RASAKAN MANFAATNYA
                      </h3>
                      <h3 data-animation="animated flipInX">
                          UNIK DAN KAYANYA KEBUDAYAAMU!
                      </h3>
                  </div>
              </div>

              <div class="item">
                  <div class="carousel-caption">
                      <h3 data-animation="animated bounceInUp">
                          BERGABUNG DISINI
                      </h3>
                      <h3 data-animation="animated bounceInUp">
                          KESINI.COM SIAP MENJADI MEDIANYA!
                      </h3>
                  </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!-- batas carousel -->
        <center>
        <a href="#scroll-maps" class="animated infinite bounceIn" id="chevron-home">
            <i class="fa fa-chevron-down fa-3x"></i>
        </a>
        </center>
        <div class="clearfix"></div>
        
        <div class="buat-relative">                     
            <div class="rel">
                <img src="<?php echo URL::Base() ?>assets/images/flat-icon/tangan.png" alt="" class="tangan">        
                <img src="<?php echo URL::Base() ?>assets/images/flat-icon/tangan.png" alt="" class="tangan2">       
                <img src="<?php echo URL::Base() ?>assets/images/flat-icon/animasi2.png"alt="">         
            </div>          
        </div>      
        <div class="mobile-animasi">
            <div class="animasi-mobile-gerak col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mb-atas">
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/bus1.png" id="mobil-atas-1" height="50" width="80" />
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/motor2.png" id="mobil-atas-1" height="50" width="80" />
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/van1.png" id="mobil-atas-1" height="50" width="80" />
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/car.png" id="mobil-atas-1" height="50" width="80" />
                </div>
                <div class="mb-bawah">
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/bus1.png" id="mobil-bawah-1" height="50" width="80" />
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/motor.png" id="mobil-bawah-1" height="50" width="80" />
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/van.png" id="mobil-bawah-1" height="50" width="80" />
                    <img src="<?php echo URL::Base() ?>assets/images/flat-icon/car1.png" id="mobil-bawah-1" height="50" width="80" />
                </div>                  
            </div>
        </div>
    </div>
    <div class="rumput"></div>
</section>
    <!-- ........................   MAPS CONTENT  .............................. -->
<section id="scroll-maps">
    <div class="content-maps">
        <div class="peta-ind">
            <div id="mainmap" style="height:900px"><span style="margin: 20px 0px 0px 50px;">Peta Tidak Termuat Cek Konektivitas Internet Anda</span></div>
            <div class="pilihprovinsi">
<!--                 <div class="judul-maps">
                    <small>Pilih Provinsi & Kabupaten Untuk Jelajah Budaya Indonesia</small><hr>                    
                </div>
 -->                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <select name="provinsi" onchange="chain_combobox()" id="provinsi" class="form-control">
                            <option value="">Pilih Provinsi</option>
                            <?php 
                                $provinsiQuery = $db->query("SELECT * FROM master_provinsi");
                                while($rowProvinsi = $provinsiQuery->fetch_assoc()){
                             ?>
                            <option value="<?php echo $rowProvinsi['provinsi_id'] ?>">
                                <?php echo $rowProvinsi['provinsi_nama'] ?>
                            </option>
                         <?php } ?>
                        </select>
                    </div>
                    
                    <div class="kebawah-dr-maps-2">        
                        <a href="#tabs-gaya" class="animated infinite bounceIn" id="chevron-home">
                            <i class="fa fa-chevron-down fa-3x"></i>
                        </a>
                    </div>     
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <select name="kabupaten" onchange="chain_combobox2()" id="kabupaten" class="form-control">
                        <option value="">Pilih Kabupaten</option>
                    </select>
                </div>
            </div>
        </div>
    <center>
    <div class="kebawah-dr-maps">        
        <a href="#tabs-gaya" class="animated infinite bounceIn" id="chevron-home">
            <i class="fa fa-chevron-down fa-3x"></i>
        </a>
    </div>  
    </center>              
    </div>
</section>
<!-- ....................................................................................... -->
<!-- TAB CONTENT -->
<div class="tabs-content" id="tabs-gaya">
    <div class="container">
        <section>
            <div class="tabs tabs-style-fillup">
                <nav>
                    <ul>
                        <li><a href="#section-fillup-1"><i class="fa fa-map-marker fa-2x"></i><span>DESTINASI</span></a></li>
                        <li><a href="#section-fillup-2"><i class="fa fa-comments fa-2x"></i><span>Topik</span></a></li>
                    </ul>
                </nav>
                    
                <div class="content-wrap">
                        
                        <!--.................... SECTION FILL UP 1 ....................-->    
                        <section id="section-fillup-1">
                            <div class="row text-center">
                                <?php 
                                    $latest = $db->query("SELECT * FROM v_article WHERE article_sts = 1 ORDER BY article_id DESC LIMIT 3");
                                    while($rowLatest = $latest->fetch_assoc()){
                                        $article_pict = !empty($rowLatest['article_pict'])?URL::Base().'/uploads/article_cover/'.$rowLatest['article_pict']:URL::Link('assets/images/no-image.jpg');
                                ?>
                                <div class="col-md-7">
                                    <a href="<?php echo URL::Link('artikel/baca/'.$rowLatest['article_id'].'/'.$rowLatest['article_slug']) ?>" class="thumbnail home-thumb">
                                        <img src="<?php echo $article_pict ?>" alt="<?php echo $rowLatest['article_pict'] ?>">
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="tabs-heading">
                                        <a href="<?php echo URL::Link('artikel/baca/'.$rowLatest['article_id'].'/'.$rowLatest['article_slug']) ?>">
                                            <?php echo $rowLatest['article_title'] ?>
                                        </a>
                                    </h1>
                                    <div class="tabs-text">
                                        <?php echo substr($rowLatest['article_content'], 0,400) ?>
                                        <p>
                                            <a href="<?php echo URL::Link('artikel/baca/'.$rowLatest['article_id'].'/'.$rowLatest['article_slug']); ?>" class="btn btn-primary">Lihat Selengkapnya</a>
                                        </p>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                            <a href="<?php echo URL::Link('artikel'); ?>" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-">Lihat Yang Lainnya</a>
                        </section>                    
                        <!-- .................. SECTION FILL UP 2 ....................-->
                        <section id="section-fillup-2">
                            <div class="row text-center">
                                <ul class="cd-accordion-menu animated">
                                    <li class="has-children">
                                        <input type="checkbox" name="group-1" id="group-1" checked>
                                        <label for="group-1" class="primer">TOPIK TERBARU</label>
                                        <?php 
                                            $terbaruQuery = $db->query("SELECT * FROM v_thread
                                            WHERE thread_sts = 1
                                            ORDER BY thread_id DESC
                                            LIMIT 5;");
                                        ?>
                                        <ul>
                                            <?php while($rowTerbaru = $terbaruQuery->fetch_assoc()){ ?>
                                            <li>
                                                <a href="<?php echo URL::Link('forum/topik/baca/'.$rowTerbaru['thread_id'].'/'.$rowTerbaru['thread_slug']); ?>" class="tabss">
                                                    <span class="judul"><?php echo $rowTerbaru['thread_title'] ?></span>
                                                    <small>
                                                        <span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Kategori : <?php echo $rowTerbaru['category_name'] ?> 
                                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Pengguna : <?php echo $rowTerbaru['name'] ?>  
                                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Tanggal : <?php echo $rowTerbaru['created_at'] ?>  
                                                    </small>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <input type="checkbox" name="group-2" id="group-2">
                                        <label for="group-2">TOPIK TERPOPULER</label>

                                        <ul>
                                            <?php 
                                                $popularQuery = $db->query("SELECT * FROM v_thread
                                                WHERE thread_sts = 1
                                                ORDER BY jumlahViewer DESC,jumlahLike DESC
                                                LIMIT 5;");
                                            ?>
                                            <?php while($rowPopular = $popularQuery->fetch_assoc()){ ?>
                                            <li>
                                                <a href="<?php echo URL::Link('forum/topik/baca/'.$rowPopular['thread_id'].'/'.$rowPopular['thread_slug']); ?>" class="tabss">
                                                    <span class="judul"><?php echo $rowPopular['thread_title'] ?></span>
                                                    <small>
                                                        <span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Kategori : <?php echo $rowPopular['category_name'] ?> 
                                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Pengguna : <?php echo $rowPopular['name'] ?>  
                                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Tanggal : <?php echo $rowPopular['created_at'] ?>  
                                                    </small>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- cd-accordion-menu -->
                                <a href="<?php echo URL::Link('forum'); ?>" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-">Lihat Yang Lainnya</a>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
<!-- tabs javascript -->
<script>
function mainmap()
{
	
  var coordinate = new google.maps.LatLng(-4.968371656245735, 118.916015625);
  var mapProp = {
    disableDoubleClickZoom: true,
    center:coordinate,
    zoom: 5,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  };

  map = new google.maps.Map(document.getElementById("mainmap"),mapProp);
  
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
                                        "<a target=\'_blank\' href=\''.URL::Link("artikel/baca/".$value["article_id"].'/'.$value["article_slug"]).'\'>"+nama['.$i.']+"</a>"+
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


function chain_combobox()
{
	$("#kabupaten").html('<option value="">--Pilih Kabupaten--</option>');
	$.ajax({
		url : "<?php echo URL::Link('app/ajaxRequest/chain_combobox.php') ?>",
		type:"POST",
		data:{provinsi : $("#provinsi").val()},
		success: function(data){
			var res = JSON.parse(data);
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
			if (res.lat != '' || res.lng != '') {
				centerMap(res.lat,res.lng,10);
			};

		},
		error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
	})
}
google.maps.event.addDomListener(window, 'load', mainmap);
</script>

<script type="text/javascript" src="<?php echo URL::Link('assets/js/tabs.js') ?>"></script>

<!-- CAROUSEL -->
<script type="text/javascript" src="<?php echo URL::Link('assets/js/custom_carousel.js') ?>"></script>

<script type="text/javascript" src="<?php echo URL::Link('assets/js/classie.js') ?>"></script>

<!-- .................................................................... -->


<script type="text/javascript" src="<?php echo URL::Link('assets/js/selectfx.js') ?>"></script>

<!-- SCROLL TO SELECTED ELEMENT -->
<script type="text/javascript">
    $('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
</script>