<?php
/**
 * The template for displaying all single gallery

 */

get_header(); ?>


<h2> <?php the_title(); ?> </h2>

<section class="singleitem slider">
<?php   
while ( have_posts() ) : the_post(); ?> 


	<div>
	<img src="<?php the_field('slide_image_1'); ?>" alt="" />
	</div>
	<div>
	<img src="<?php the_field('slide_image_2'); ?>" alt="" />
	</div>
	<div>
	<img src="<?php the_field('slide_image_3'); ?>" alt="" />
	</div>



<?php
endwhile;
wp_reset_query();
?>
</section>




<?php
get_footer();
?>