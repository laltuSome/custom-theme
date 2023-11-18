<?php /* Template Name: About Template */ ?>

<?php get_header();?>



<section class="section section-about1">
	<div class="container">
		<div class="row justify-content-between align-items-center">
	
		<div class="col-lg-6 col-md-6 col-12">
			<div class="wel-texts pe-lg-5 pe-sm-0 pb-4 text-lg-start text-sm-center" data-aos="fade-up">
<div class="bodylogo" >
				  <?php 
$imagelogo = get_field('body_logo');
if( !empty( $imagelogo ) ): ?>
    <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" />
    <?php endif; ?>
</div>
<div class="lins1 "></div>

<?php the_field('about_content'); ?>


</div>
		</div>

		<div class="col-lg-6 col-md-6 col-12">  
<div class="pic-holder text-lg-end text-sm-center">
	<?php $image1 = get_field('about_image'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
		</div>

			</div>



</div>
</section>

<section class="section section-about2">
	<div class="container">
		<div class="row">
				<div class="col-lg-4 col-md-4 col-12" data-aos="fade-up">
<div class="content-holder matchHeight padding-cstom1">
<div class="qout-right">
<?php $image1 = get_field('quote_image'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
</div>
<?php the_field('about_content2'); ?>

</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12" data-aos="fade-up">
<div class="content-holder padding-cstom2 matchHeight">

<?php the_field('about_content3'); ?>

</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12" data-aos="fade-up">
<div class="content-holder2 matchHeight">
<div class="abouts-right text-lg-end text-sm-center">
<?php $image1 = get_field('about2_image'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
</div>


</div>
				</div>

			</div>
		</div>
	</section>





<?php get_footer();?>