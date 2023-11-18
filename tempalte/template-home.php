<?php /* Template Name: Home Template */ ?>

<?php get_header();?>



<section class="section section-about overflow-visible" id="about">
	<div class="container">
		<div class="row align-items-center">
<div class="col-lg-12 col-md-12 col-12">
	
<div class="about-sec" data-aos="fade-up">
		
<div class="raound">

<div class="holder-hilow">
	<img src="<?php bloginfo( 'template_url' ); ?>/images/raound.png">
<h2><?php the_field('heading'); ?></h2>
</div>

</div>

<?php the_field('content'); ?>

</div>

</div>
</div>


<div class="row justify-content-center">

<div class="col-lg-8 col-md-8 col-12">

	<?php if( have_rows('slides_logo') ): ?>
    <ul class="logo-slides">
    <?php while( have_rows('slides_logo') ): the_row(); 
        $image = get_sub_field('image');
        ?>
      	<li class="logo-item" data-aos="flip-up"> <?php echo wp_get_attachment_image( $image, 'full' ); ?></li>
           
    
    <?php endwhile; ?>
    </ul>
<?php endif; ?>



</div>

</div>

	</div>
</section>

<section class="section section-exp overflow-visible" >
	<div class="container position-relative">
<div class="row">
<div class="col-12">
	<div class="heading-logo" data-aos="fade-up">
	  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>

	<h2><?php the_field('experience_content1'); ?></h2>
	</div>

</div>
	</div>	


	<div class="row">
<div class="col-lg-6 col-md-6 col-12">
	<div class="icon-holder-content" data-aos="fade-up">
<?php if( have_rows('icon_slides1') ): ?>
    <ul class="slides-icon1" >
    <?php while( have_rows('icon_slides1') ): the_row(); 
        $image = get_sub_field('image');
        ?>
        <li >
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            <p><?php the_sub_field('caption'); ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>


<?php if( have_rows('icon_slides2') ): ?>
    <ul class="slides-icon2">
    <?php while( have_rows('icon_slides2') ): the_row(); 
        $image = get_sub_field('image');
        ?>
        <li>
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            <p><?php the_sub_field('caption'); ?></p>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
</div>
</div>
<div class="col-lg-1 col-md-1 col-12 d-lg-block d-none">
	<div class="boder-centet"></div>
</div>

<div class="col-lg-5 col-md-5 col-12">
<div class="wel-text" data-aos="fade-up">
<?php the_field('experience_content2'); ?>

</div>

	</div>

	</div>

<div class="row">

<div class="col-12 text-center">
	<a href="#" data-aos="flip-up" class="large-btn2">Contact Us</a>
</div>

</div>



		</div>
	</section>

<?php $image = get_field('callto_image'); ?>
<section class="section section-callto overflow-visible" style="background:url(<?php echo $image['url']; ?>);">
	<div class="container">
<div class="row align-items-center">
<div class="col-lg-12 col-md-12 col-12">
	
<?php
$sales = get_field('calto');
if( $sales ): ?>
	<div class="call-boxs text-center">
		
		
			<h3 data-aos="fade-up"> <?php echo $sales['titel']; ?></h3>
			<p data-aos="fade-up"><?php echo $sales['description']; ?></p>
		
		<div class="batngroup text-center">
			<a class="border-btn" data-aos="flip-up" href="<?php echo $sales['url']; ?>">Contact Us</a>
		</div>

	</div>
<?php endif; ?>

</div>

</div>
	</div>
</section>



<section class="section section-testmo overflow-visible" >
	<div class="container ">
<div class="row">
<div class="col-12">
<div class="heading-logo-center text-center" data-aos="fade-up">
	  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>

	<h2><?php the_field('testmonal_titel'); ?></h2>
	</div>


	<div class="quote text-center">

    <img src="<?php echo $theme_options['quote-icon']['url'];?>" alt="quote" />

	</div>

	

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      
    
       <?php

		 $args = array( 
		 'post_type' => 'testimonials', 
		 'posts_per_page' => -1, 
		 'orderby' => 'menu_order', 
		 'order' => 'DESC' 
		 );

		 query_posts( $args );

		 while ( have_posts() ) : the_post();

		  ?> 
<div class="swiper-slide">
	<div class="testimonils-item">
<?php the_content() ;?>
   <div class="thum-text">
            	<strong><?php the_title() ;?></strong>
            	<span><?php the_field('designation'); ?></span>
            	
            </div>
	</div>

</div>


 	  <?php endwhile; wp_reset_query(); ?>	

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
</div>
</div>

</section>





<?php get_footer();?>