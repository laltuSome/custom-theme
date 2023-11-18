 
<?php global $theme_options;?>

<section class="section section-contact " id="contact">
  <div class="container position-relative">
<div class="row">
<div class="col-lg-5 col-md-5 col-12">
  
  <div class="form-img" style="background-image:url(<?php echo $theme_options['form-image']['url'];?>)">

<div class="form-subtxt">
<?php echo $theme_options['form-text'];?>

  </div>
  </div>

  

</div>
<div class="col-lg-7 col-md-7 col-12 ps-lg-5 ps-md-2  ps-sm-0 padin-top-btom">
  
<div class="page-form">
<div class="text-center form-heading">
<img src="<?php echo $theme_options['form-logo']['url'];?>" alt="logo">
<h3><?php echo $theme_options['form-heading'];?></h3>
</div>
<?php echo do_shortcode('[contact-form-7 id="89" title="conatc fomr footer"]');?>


</div>

</div>

  </div>
</div>
</section>

<footer class="footer" >
<div class="container">
    <div class="row pb-5">

      <div class="col-lg-3 col-md-3  col-12 ">
    <div class="footer-content matchHeight">

<ul class="footer-menu">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'footer-menu',
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


    </div>
    </div>


<div class="col-lg-4 col-md-4 col-12 ps-lg-5 ps-sm-0">
<div class="footer-about"><?php echo $theme_options['address-footer'];?></div>
</div>

<div class="col-lg-4 col-md-4 col-12">
    <div class="text-holder-footer">
<h3><?php echo $theme_options['footer-text'];?></h3>
<ul class="socil-footer">
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

    </div>




  
    </div>
  </div>



  <div class="foot-menu-copy">
    <div class="container">
      <div class="row justify-content-between align-items-center">
    

          <div class="col-lg-12 col-md-12 col-12">
  <p class="text-copy text-center">© <?php echo date('Y'); ?> Web Engineered By <a href="http://webdesignsdetroit.com/" target="_blanck">Web Designs Detroit</a></p>
          </div>
  
</div>
    </div>
  </div>
</footer>



<script src="<?php  bloginfo( 'template_url' ); ?>/js/jquery-3.3.1.min.js" ></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/popper.min.js" ></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js" ></script>

 <script src="<?php bloginfo( 'template_url' ); ?>/js/swiper-bundle.min.js"></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/baguetteBox.js" ></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/aos.js" ></script>



    
<script type="text/javascript">





   var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      
      },
    });



  
     AOS.init({
        easing: 'ease-out-back',
        duration: 1000,
        once: true
      });


  //form submit message
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
      el.style.display = 'none';
    });
  }, false );

  //form label animeshan

jQuery('input, textarea').focus(function(){
  jQuery(this).parents('.form-group').addClass('focused');
});

jQuery('input, textarea').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "" ) {
    jQuery(this).removeClass('filled');
    jQuery(this).parents('.form-group').removeClass('focused');  
  } else {
    jQuery$(this).addClass('filled');
  }
})  
  //form submit message



//nav////////

    let menu_icon_box = document.querySelector(".menu_icon_box");
let box = document.querySelector(".box");


menu_icon_box.onclick = function(){
    menu_icon_box.classList.toggle("activem");
    box.classList.toggle("active_box");
}
document.onclick = function(e){
    if (!menu_icon_box.contains(e.target) && !box.contains(e.target) ) {
        menu_icon_box.classList.remove("activem");
        box.classList.remove("active_box");
    }
}

//nav////////




</script>

<?php wp_footer(); ?>
</body>
</html>
