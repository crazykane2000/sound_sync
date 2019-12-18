<?php session_start();
    include 'configuration_function.php';
    if (check_user_exist($api_host,$_SESSION['user'])) {
        # code... do nothing we are good to go
    }else{
        header('Location:index.php?choice=error&value=Invalid username or password please try logging in again');
        exit();
    }
  ?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="Kishan Sharma">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/player/volume.css">
	<link rel="stylesheet" type="text/css" href="js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>
	<?php //include 'loader.php'; ?>
    <div class="ms_main_wrapper">        
        <?php include 'sidebar.php'; ?>
        <div class="ms_content_wrapper padder_top80">
            <?php include 'header.php'; ?>
            <div style="padding: 18px;"></div>
            <?php 
                $data = get_all_track_logs("13.233.7.230"); 
                $data = json_decode($data,TRUE);
                //print_r($data); 
            ?>
            <!---Recently Played Music--->
            <div class="ms_rcnt_slider">
                <div class="ms_heading">
                    <h1>Recently Played</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($data as $key => $value) {
                                $track_thumb = "default_thumb.jpg";
                                if ($value['trackDataJSON']['thumb_nail']!="") {
                                    $track_thumb = $value['trackDataJSON']['thumb_nail'];
                                }
                                echo '<div class="swiper-slide">
                                        <div class="ms_rcnt_box">
                                            <div class="ms_rcnt_box_img">
                                                <img src="tracks/'.$track_thumb.'" alt="">
                                                <div class="ms_main_overlay">
                                                    <div class="ms_box_overlay"></div>
                                                    <div class="ms_more_icon">
                                                        <img src="images/svg/more.svg" alt="">
                                                    </div>
                                                    
                                                    <a href="track_buy_play.php?track_id='.$value['songId'].'"><div class="ms_play_icon">
                                                        <img src="images/svg/play.svg" alt="">
                                                    </div></a>
                                                </div>
                                            </div>
                                            <div class="ms_rcnt_box_text">
                                                <h3><a href="#">'.$value['name'].'</a></h3>
                                                <p>'.$value['trackDataJSON']['artist'].'</p>
                                                <span>'.$value['trackDataJSON']['thumb_nail'].'</span>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next slider_nav_next"></div>
                <div class="swiper-button-prev slider_nav_prev"></div>
            </div>
          
            <div class="ms_featured_slider">
                <div class="ms_heading">
                    <h1>User logs Here</h1>
                    <span class="veiw_all"><a href="#">view more</a></span>
                </div>
                <div class="ms_feature_slider swiper-container">
                    <div class="col-sm-12">
                       
                        <div class="album_inner_list">
                            <div class="album_list_wrapper">
                                <ul class="album_list_name">
                                    <li>#</li>
                                    <li>Email</li>
                                    <li>Address</li>
                                    <li class="text-center">Action Performed</li>
                                    <li class="text-center">Time</li>
                                </ul>
                                <?php 
                                    $data = get_all_user_logs("13.233.7.230");
                                    $data = json_decode($data,TRUE);
                                    $i=1;

                                    foreach ($data as $key => $value) {
                                        $epoch = $value['timestamp']/1000000;
                                        echo ' <ul>
                                                <li ><a href="#"><span class="play_no">'.$i.'</span></a></li>
                                                <li><a href="#">'.$value['email'].'</a></li>
                                                <li ><a href="#" title="'.$value['address'].'"> '.substr($value['address'], 0,22).'...</a></li>
                                                <li class="text-center"><label class="label label-success">'.$value['actionPerformed'].'</label></li>
                                                <li class="text-center">
                                                    '.date("d-m-Y H:i:s", substr($epoch, 0, 10)).'
                                                </li>
                                               
                                            </ul>';
                                            $i++;
                                    }
                                ?>
                               
                              
                            </div>
                        </div>
                     </div>
                   
                </div>
                    
            </div>
			
          
        
           
          
        </div>
        <!----Footer Start---->
       <?php include 'footer.php'; ?>
       
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/plugins/player/audio-player.js"></script>
    <script type="text/javascript" src="js/plugins/player/volume.js"></script>
    <script type="text/javascript" src="js/plugins/nice_select/jquery.nice-select.min.js"></script>
	<script type="text/javascript" src="js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>