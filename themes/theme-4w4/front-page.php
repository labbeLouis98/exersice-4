<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
<!-- ///////////////////////////////////////////////////////// CATEGORY-COURS.PHP -->


<?php if ( have_posts() ) : ?>

<main id="primary" class="site-main">

    <header class="page-header">
        <?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' ); 
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
    </header><!-- .page-header -->

    <!-- debut du carrousel 1-->
    <!--section class="carrousel">
    <div>
        <p>Apprentissage</p>
        <img id="svg1" src="https://s2.svgbox.net/illlustrations.svg?ic=programing&color=000000">

    </div>
    <div>
        <p>Création</p>
        <img id="svg2" src="https://s2.svgbox.net/illlustrations.svg?ic=wacom-tablet&color=000000">
    </div>
    <div>
        <p>Intégration</p>
        <img id="svg3" src="https://s2.svgbox.net/illlustrations.svg?ic=app-development&color=000000">
    </div>
</section-->
    <!--section class="boutons">
    <botton id='un'><input type="radio" name="radio" checked></botton>
    <div id='deux'><input type="radio" name="radio"></div>
    <div id='trois'><input type="radio" name="radio"></div>
</section-->
    <!-- Fin du carrousel 1-->
    <!-- debut du carrousel 2-->

    <section class="list-cours">

    <!--section class="carrousel-2">
    </section-->
    <!--section class="ctrl-carrousel">
    </section-->
    <!-- fin du carrousel2-->

    
    <?php
    $ctrl_radio = "";
			/* Start the Loop */
            $precedent = "XXXXXXX";
			while ( have_posts() ) :
				the_post();
                convertir_tableau($tPropriete);
                if ($precedent != $tPropriete ['typeCours']): ?>
    <?php if ($precedent != "XXXXXXX"): ?>
    
    </section>
    <?php endif;?>

    <?php if ($precedent == "Web"): ?>
    <section class="ctrl-carrousel">
        <?php echo $ctrl_radio; ?>
    </section>
    <?php endif;?>

    <?php if ($tPropriete ['typeCours'] != 'Web'): ?>
        
    <h2><?php echo $tPropriete ['typeCours'] ?> </h2>

    <?php endif;?>

    <section <?php echo ($tPropriete ['typeCours'] == 'Web' ? 'class="carrousel-2"' : 'class="bloc"' ); ?>>
    
        <?php endif;?>
        <?php 
        if ($tPropriete ['typeCours'] == "Web"):
    
          get_template_part( 'template-parts/content', 'carrousel' );
          $ctrl_radio .= '<div class="bout"><input class="checkmark" type="radio" name="rad-carrousel"></div>';
          
        else:
            get_template_part( 'template-parts/content', 'bloc' );
    
      endif; 
     $precedent = $tPropriete ['typeCours'];

      endwhile; ?>

    </section>
    

    <?php endif; ?>

</main> <!-- #main -->

<?php
get_sidebar();
get_footer();

function convertir_tableau(&$tPropriete){
    $titre_grand = get_the_title();
    $tPropriete  ['session'] = substr($titre_grand, 4,1);
    $tPropriete  ['nbHeure'] = substr($titre_grand, -4,3);
    $tPropriete  ['titre'] = substr($titre_grand, 8, -6); // ou $titre
    $tPropriete ['sigle'] = substr($titre_grand,0 , 7);
    $tPropriete['typeCours'] = get_field('type_de_cours');
}