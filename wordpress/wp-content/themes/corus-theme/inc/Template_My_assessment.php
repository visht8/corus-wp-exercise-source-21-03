<?php 
/* Template Name: My assessment */
get_header();
?>

 
<h2> SIngle Item Slider with specific post ID </h2>
  
<?php

$fields = get_fields(28);

if( $fields ): ?>
     <section class="singleitem slider">
        <?php foreach( $fields as $name => $value ): ?>            
			<img src=" <?php echo $value; ?>" alt="" />			
        <?php endforeach; ?>
    </section>
<?php endif; ?>


<?php
/*echo '<pre>';
print_r($fields);
echo '</pre>'; */

?>  



<h2> Thumbnail slider with all posts </h2>


<section class="regular slider">
	<?php

	$custom_args = array(
	'post_type' => 'gallery',	
	);
	$custom_query = new WP_Query( $custom_args ); 
	if ( $custom_query->have_posts() ) : 
	while ( $custom_query->have_posts() ) : $custom_query->the_post(); 

	?>


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
	wp_reset_postdata(); 
	else:  
	?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


</section>
  

<?php get_footer(); ?>