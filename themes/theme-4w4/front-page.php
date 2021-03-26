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

    <header class="page-header">
        <?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' ); 
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
    </header><!-- .page-header -->

    <!-- debut du carrousel 1-->

    <section class="carrousel">
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
    </section>

    <section class="boutons">


        <botton id='un'><input type="radio" name="radio" checked></botton>


        <div id='deux'><input type="radio" name="radio"></div>


        <div id='trois'><input type="radio" name="radio"></div>


    </section>

    <!-- Fin du carrousel 1-->


    <!-- debut du carrousel 2-->
    <section class="carrousel-2">

        <article class="slide__conteneur">
            <div class="slide">
                <img width="150" height="150" src="http://localhost/4w4/wp-content/uploads/2021/03/database.png"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
                <div class="slide__info">
                    <p> 582-1W1 - 75h - Web </p>
                    <a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/"> Mise en page Web </a>
                    <p> Session 1 </p>
                </div>
            </div>
        </article>

        <article class="slide__conteneur">
            <div class="slide">
                <img width="150" height="150" src="http://localhost/4w4/wp-content/uploads/2021/03/database.png"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
                <div class="slide__info">
                    <p> 582-1W1 - 75h - Web </p>
                    <a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/"> Mise en page Web </a>
                    <p> Session 2 </p>
                </div>
            </div>
        </article>

        <article class="slide__conteneur">
            <div class="slide">
                <img width="150" height="150" src="http://localhost/4w4/wp-content/uploads/2021/03/database.png"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
                <div class="slide__info">
                    <p> 582-1W1 - 75h - Web </p>
                    <a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/"> Mise en page Web </a>
                    <p> Session 3 </p>
                </div>
            </div>
        </article>

    </section>



    <section class="ctrl-caroussel-2">


        <botton id=''><input type="radio" name="rad-carrousel"></botton>


        <div id=''><input type="radio" name="rad-carrousel"></div>


        <div id=''><input type="radio" name="rad-carrousel"></div>


    </section>



    <!-- fin du carrousel2-->

    <main id="primary" class="list-cours">
    <section class="contenu">


        <?php
			/* Start the Loop */
            $precedent = "XXXXXXX";
			while ( have_posts() ) :
				the_post();
                convertir_tableau($tPropriete);
                if ($precedent =! $tPropriete ['typeCours']): ?>

        <?php if ($precedent != "XXXXXXX"): ?>
    </section>
    <?php if ($precedent != "Web"): 
        $ctrl_radio .= '</section>';
        echo $ctrl_radio;
    endif;?>

    

        

    <?php endif ?>
    
    <h2><?php echo $tPropriete ['typeCours'] ?> </h2>
    <?php if ($tPropriete ['typeCours'] == "Web"): ?>
    <section class="carrousel-2">


        <?php 
        $ctrl_radio = '<section class="ctrl-caroussel-2">'
    
    
    else: ?>
        <section>

            <?php endif ?>
            <?php endif ?>
            
            <?php

     if ($tPropriete ['typeCours'] == "Web"):
        get_template_part( 'template-parts/content', 'carrousel' );
        $ctrl_radio .= '<botton id=''><input type="radio" name="rad-carrousel"></botton>'
             else:
            get_template_part( 'template-parts/content', 'bloc' );
    
     endif; 
        
/*-----------------------template content link ---------------------- */
        
    $precedent = $tPropriete ['typeCours'];

                 endwhile; ?>

        </section>
        <!--Fin section cours -->

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