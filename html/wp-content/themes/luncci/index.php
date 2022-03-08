<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>
    <div class="container"> 
        <?php get_header() ?>
        <div class="card">
	<?php
	if ( have_posts() ) :
	
		while ( have_posts() ) :
	
			the_post();
			?>
	
			<article <?php post_class(); ?>>
			
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
			
				<div class="entry-content">
					<?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
				</div>
			
			</article>
			
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
	
		endwhile;
	
	else :
		?>
		<article class="no-results">
			
			<header class="entry-header">
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'my-custom-theme' ); ?></h1>
			</header>
		
			<div class="entry-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'my-custom-theme' ); ?></p>
			</div>
		
		</article>
	<?php
	endif;
	?>
</div>
        <?php get_footer() ?>
    </div>
</body>
</html>