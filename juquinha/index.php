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
    
    <img src="assets/img/m1.png">
    <h4>Primeira imagem aleatoria para o tema</h4> 
    
    <img src="assets/img/m2.png">
    <h4>Segunda imagem aleatoria para o tema</h4> 
    
    <img src="assets/img/m3.png">
    <h4>Terceira imagem aleatoria para o tema</h4> 
    
    <img src="assets/img/m4.png">
    <h4>Quarta imagem aleatoria para o tema</h4> 
    
    <img src="assets/img/m5.png">
    <h4>Quinta imagem aleatoria para o tema</h4> 
    
    <img src="assets/img/m6.png">
    <h4>Sexta imagem aleatoria para o tema</h4> 

</div>
</div>
</div>
<?php get_footer (); ?>
