<?php global $theme_options;?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<!-- COMMON META TAG -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#009de6">
<!-- COMMON META TAG -->
  <!--PAGE TITLE-->
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <!--PAGE TITLE-->
  <!--FAB ICON-->
 
 <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_options['fav-icon']['url'];?>">
  
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_options['app-icon']['url'];?>">

<!--FAB ICON-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">




<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/aos.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">

  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/swiper-bundle.min.css" />


  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/baguetteBox.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">

<?php wp_head(); ?>


</head>
<body 
      <?php body_class( 'home' ); ?>>



  <!-- scrollup -->
  <div class="scrollup swich<?php echo $theme_options['opt-switch'];?>"><i class="fa fa-angle-up"></i></div>
  <!-- scrollup -->



 <div class="box">
 
  <div class="nav-hed">
     
      <a class="logo" href="<?php echo home_url();?>">
<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="336" height="102">
</a>
  </div>
  <ul class="mobile-menu">
              <?php
$args = array(
'theme_location'   => '',
'menu'         => 'top-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
            </ul>
            <!--<ul class="header-info-mob">
 <li><a href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a> 
</li>
 <li>
  <a href="mailto:<?php echo $theme_options['email-footer'];?>"><?php echo $theme_options['email-footer'];?></a> </li>


              </ul> -->

              <ul class="socil-footer-mobile">
  <li><a href="<?php echo $theme_options['social-youtube'];?>" title="youtube"> 
  <img src="<?php bloginfo( 'template_url' ); ?>/images/yt.png" alt="in" width="34" height="30">
</a></li>
<li><a href="<?php echo $theme_options['social-facebook'];?>"  title="facebook">
  <img src="<?php bloginfo( 'template_url' ); ?>/images/facebook.png" alt="facebook" width="34" height="30">
</a></li>

<li><a href="<?php echo $theme_options['social-instagram'];?>" title="instagram">
    <img src="<?php bloginfo( 'template_url' ); ?>/images/insta.png" alt="instagram" width="34" height="30">
</a></li>
<li><a href="<?php echo $theme_options['social-twitter'];?>" title="twitter">
    <img src="<?php bloginfo( 'template_url' ); ?>/images/twiter.png" alt="twitter" width="34" height="30">
</a></li>



</ul>
</div>

<header class="top-head sticky<?php echo $theme_options['opt-switch2'];?>">

<div class="menubars2">
    <div class="container ">
        <div class="row justify-content-between align-items-center header-border">
        <a href="#contact" class="large-btn"><span><img src="<?php bloginfo( 'template_url' ); ?>/images/icon-time.png"></span> Make an Appointment</a>
             <!-- logo -->
  <a class="logo" href="<?php echo home_url();?>">
<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="336" height="102">
</a>
     


    <div class="menu_icon_box">
           <div class="cros">

           <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="line4"></div>
</div>
        </div>

    

     
    </div>
</div>
</div>



 
</header>
 





            
        

<div class="section ">
 


  <?php if (is_front_page()) { ?>

    <div class="banner-home overflow-hidden ">

<div class="line-left"></div>
          
    <div class="baner-items" >
    <strong class="largbanner">confidence</strong>
      <div class="container">
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="banner-content">
     <div data-aos="fade-in">
        <?php 
$imagelogo = get_field('banner_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
<?php endif; ?>
     </div>
 <div data-aos="fade-up">
      <?php the_field('banner_content'); ?>
    </div>
      </div>
    </div>
    <div class="col-lg-6 col-12">
      
<div class="banner-img">
  <div class="fraim"><img src="<?php bloginfo( 'template_url' ); ?>/images/Frame1.png" alt="<?php echo esc_attr($image2['alt']); ?>" /></div>
   <?php 
$image2 = get_field('banner_imgs');
if( !empty( $image2 ) ): ?>
    <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
<?php endif; ?>
<div class="banner-raound2"></div>
<div class="banner-raound1"></div>

</div>


    </div>
</div>
</div>

    </div>
  
  </div>


   <div class="text-center scroolbody"><a href="#about" class="scroll-center"><img src="<?php bloginfo( 'template_url' ); ?>/images/Scroll.png" alt="<?php echo esc_attr($image2['alt']); ?>" /></a>  </div>



  <?php }
else if ( is_home() || is_category() || is_archive() || is_search()) { ?>
  <!---blog-baner--->
  <div class="inner-banner" style=" background:url('<?php bloginfo('template_directory'); ?>/images/inner-banner.png'); background-position: center center;
                                    background-repeat:no-repeat; background-size:cover;">
 <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3>Blog</h3>

</div>

  </div>
   </div>   
  </div>

  <?php }



elseif ( is_single() ) { ?>
  <!---single---->
  <div class="inner-banner" style=" background:url('<?php bloginfo('template_directory'); ?>/images/inner-banner.png'); background-position: center center;
                                    background-repeat:no-repeat; background-size:cover;">
  <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3> Blog</h3>

</div>

  </div>
   </div>                        
 
  </div>
  <!---blog-baner--->
    
<?php }
elseif ( is_404() ) { ?>
 

<?php }
elseif ( is_page(array('cooling')) ) { ?>
 <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>
 <div class="inner-banner paddin-banner" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-12 text-center" data-aos="fade-up">

<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>

</div>

  </div>
   </div>
   
  </div>

 <?php  } else { ?>
  <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>
  <div class="inner-banner" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-12 text-center" data-aos="fade-up">

<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>
<?php the_field('subtitle'); ?>
</div>

  </div>
   </div>
   
  </div>
    
   
    
  <?php } ?>
</div>

