<?php /* Template Name: Services Template */ ?>

<?php get_header();?>



<section class="section section-serv1">
	<div class="container">
			<div class="services-block">
		<div class="row justify-content-between align-items-center">
	
		<div class="col-lg-7 col-md-6 col-12 mb-3">
			<div class="wel-texts contetn-mar" data-aos="fade-up">
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>


<?php the_field('services_content1'); ?>


</div>
		</div>

		<div class="col-lg-5 col-md-5 col-12 mb-3">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('services_image1'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

			</div>
</div>

<div class="row justify-content-center">
	<div class="col-4 text-center"><div class="lins1"></div></div>
</div>

	<div class="services-block mt-3">
		<div class="row justify-content-between align-items-center">
	
		
		<div class="col-lg-5 col-md-5 col-12 mb-3">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('services_image2'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

		<div class="col-lg-7 col-md-6 col-12 mb-3">
			<div class="wel-texts contetn-mar" data-aos="fade-up">
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>


<?php the_field('services_content2'); ?>


</div>
		</div>


			</div>
</div>



</div>
</section>


<section class="section section-serv2">
	<div class="container">
			<div class="services-block">
		<div class="row justify-content-between align-items-center">
	
		<div class="col-lg-7 col-md-6 col-12 mb-3">
			<div class="wel-texts contetn-mar" data-aos="fade-up">
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>


<?php the_field('services_content3'); ?>


</div>
		</div>

		<div class="col-lg-5 col-md-5 col-12 mb-3">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('services_image3'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

			</div>
</div>

<div class="row justify-content-center">
	<div class="col-4 text-center"><div class="lins1"></div></div>
</div>

	<div class="services-block mt-3">
		<div class="row justify-content-between align-items-center">
	
		
		<div class="col-lg-5 col-md-5 col-12 mb-3">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('services_image4'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

		<div class="col-lg-7 col-md-6 col-12 mb-3">
			<div class="wel-texts contetn-mar" data-aos="fade-up">
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>


<?php the_field('services_content4'); ?>


</div>
		</div>


			</div>
</div>



</div>
</section>


<section class="section section-serv1">
	<div class="container">
			<div class="services-block">
		<div class="row justify-content-between align-items-center">
	
		<div class="col-lg-7 col-md-6 col-12 mb-3">
			<div class="wel-texts contetn-mar" data-aos="fade-up">
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>


<?php the_field('services_content5'); ?>


</div>
		</div>

		<div class="col-lg-5 col-md-5 col-12 mb-3">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('services_image5'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

			</div>
</div>

<div class="row justify-content-center">
	<div class="col-4 text-center"><div class="lins1"></div></div>
</div>

	<div class="services-block mt-3">
		<div class="row justify-content-between align-items-center">
	
		
		<div class="col-lg-5 col-md-5 col-12 mb-3">  
<div class="pic-holder text-right">
	<?php $image1 = get_field('services_image6'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

		<div class="col-lg-7 col-md-6 col-12 mb-3">
			<div class="wel-texts contetn-mar" data-aos="fade-up">
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>


<?php the_field('services_content6'); ?>


</div>
		</div>


			</div>
</div>



</div>
</section>




<?php get_footer();?>