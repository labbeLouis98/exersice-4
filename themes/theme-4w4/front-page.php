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
<main id="primary" class="list-cours">

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
                <img src="" alt="">
                <div class="slide__info">
                    <p> 582-1W1 - 75h - Web </p>
                    <a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/"> Mise en page Web </a>
                    <p> Session 1 </p>
                </div>
            </div>
        </article>

    </section>

    <section class="boutons">


        <botton id='un'><input type="radio" name="radio" checked></botton>


        <div id='deux'><input type="radio" name="radio"></div>


        <div id='trois'><input type="radio" name="radio"></div>


    </section>



    <!-- fin du carrousel2-->


    <section class="contenu">


        <?php
			/* Start the Loop */
            $precedent = "XXXXXXX";
			while ( have_posts() ) :
				the_post();
                convertir_tableau($tPropriete);
                if ($precedent =! $tPropriete ['typeCours']): 
        
                 if ($precedent != "XXXXXXX"): ?>
    </section>

    <?php endif ?>


    <h2><?php echo $tPropriete ['typeCours'] ?> </h2>
    <section>

        <?php endif ?>
        <?php
/*-----------------------template content link ---------------------- */
        get_template_part( 'template-parts/content', 'bloc' );
    $precedent = $tPropriete ['typeCours'];

                 endwhile; ?>

    </section>
    <!--Fin section cours -->

    <?php
        endif;
    ?>

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