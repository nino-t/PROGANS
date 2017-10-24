
<header id="masthead" class="site-header" role="banner">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="row">
             <div class="site-navigation-inner col-sm-12">
                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div id="logo">
                        <a href="<?php echo URL::Link('beranda') ?>">
                            <img src="<?php echo URL::Base() ?>assets/images/kesini.png" alt="Kesini.com" />
                        </a>
                    </div>
                 </div>
             
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul id="menu-primary-navigation" class="nav navbar-nav">
                        <li><a href="<?php echo URL::Link('beranda') ?>">Beranda</a></li>
                        <li><a href="<?php echo URL::Link('forum') ?>">Forum</a></li>
                        <li><a href="<?php echo URL::Link('artikel') ?>">Blog</a></li>
                        <li><a href="<?php echo URL::Link('about') ?>">Tentang Kami</a></li>
                        <li>
                            <form id="search-form" class="navbar-form navbar-left form-search" role="search">
        
                        <div class="input-group">
                          
                          <div class="input-group-btn">
                            <input type="hidden" id="search_cat" value="all">
                            <button type="button" id="search_cat_button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="dropdown-menu">
                              <li onclick="search_all()">
                                <a href="javascript:void(0)"><i class="fa fa-bars"></i> Semua</a>
                              </li>
                              <li onclick="search_forum()">
                                <a href="javascript:void(0)"><i class="fa fa-comments"></i> Forum</a>
                              </li>
                              <li onclick="search_article()">
                                <a href="javascript:void(0)"><i class="fa fa-file-text"></i> Artikel</a>
                              </li>
                            </ul>
                          </div>
                          <input type="text" class="form-control search-query" id="search" placeholder="Cari">
                          
                          <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" onclick="cari()" type="button"><i class="fa fa-search"></i></button>
                          </span>

                        </div>

                      </form>
                        </li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($auth->guest()): ?>
                            <li><a href="<?php echo URL::Link('masuk') ?>">Masuk</a></li>
                            <li><a href="<?php echo URL::Link('daftar') ?>">Gabung</a></li>
                            <li>
                                <a id="help-center" target="_blank" href="<?php echo URL::Link('faq'); ?>" data-original-title="Help Center">
                                    <i class="fa fa-question-circle help-icon"></i> 
                                </a> 
                            </li>
                            <?php else: ?>
                            <li class="dropdown" id="notic_click">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Pemberitahuan">
                                    <i class="fa fa-bell"></i>
                                    <sup id="notifikasi">
                                        <span class="badge" style="background:#d9534f;"></span>
                                    </sup>
                                </a>
                                <ul class="dropdown-menu" style="overflow:auto;" id="list-notif">
                                
                                </ul>
                            </li>
                            <li class="dropdown">
                                <?php 
                                    $uID = $auth->getSession('user_id');
                                    $photoQuery = $db->query("SELECT b.photo_name FROM users a 
                                                            LEFT JOIN users_photo b ON a.user_photo_id = b.user_photo_id
                                                            WHERE a.user_id = '$uID' "); 
                                    $rowUserPhoto = $photoQuery->fetch_assoc();
                                    $photoLink = empty($rowUserPhoto['photo_name'])?'assets/images/user.png':"uploads/user_photo/".$rowUserPhoto['photo_name'];
                                ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img width="25" height="25" style="background-color: #fff;" src="<?php echo URL::Link($photoLink) ?>" alt="user_photo" class="img-circle"> <?php echo $auth->getSession('name') ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                    <?php 
                                        if ($auth->getSession('user_lvl') == 1){
                                            $linkProfil = URL::Link('administrator');
                                        }else{ 
                                            $linkProfil = URL::Link('me');
                                        } 
                                    ?>
                                        <a href="<?php echo $linkProfil ?>"><i class="fa fa-user"></i> Profil</a>
                                    </li>
                                    <li><a href="<?php echo URL::Link('keluar') ?>"><i class="fa fa-sign-out"></i> Keluar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a id="help-center" target="_blank" href="<?php echo URL::Link('faq'); ?>" data-original-title="Help Center">
                                    <i class="fa fa-question-circle help-icon"></i> 
                                </a> 
                            </li>
                        <?php endif ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
      </nav>
</header>