<?php get_header (); ?>
<div class="row"> 
    <div class="col-md-12"> 
        <div class="jumbotron"> 

            
<h2> Seja bem vindo ao meu novo tema <h2>  
    
    <?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template( 'template/content', get_post();

		}
	} elseif ( is_search() ) {
		?>
    
    
<?php get_footer (); ?>
