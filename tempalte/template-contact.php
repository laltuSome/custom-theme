<?php /* Template Name: Contact Template */ ?>

<?php get_header();?>

<section class="section section-serv1">
	<div class="container">
		<div class="row justify-content-between align-items-center">
		<div class="col-lg-5 col-md-5 col-12">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('conatc_image'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>
<div class="col-lg-1 col-md-1 col-12">  </div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="wel-texts  pb-4" >
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>
    <?php the_field('contact_details'); ?>
<div class="lins1 mt-4 mb-4"></div>


<ul class="addres-contact">
    
      <li><span><i class="fa fa-phone" ></i> </span> <a href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a></li>
    
  </ul>

</div>
		</div>

	
			</div>



</div>
</section>

<section class="section section-contatc">
	<div class="container-fluid p-0">
	<div class="map">
							<?php the_field('map'); ?>
						</div>



</div>
</section>





<?php get_footer();?>