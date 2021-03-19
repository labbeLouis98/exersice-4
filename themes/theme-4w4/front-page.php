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
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
    </header><!-- .page-header -->

    <!-- debut du carrousel-->

    <section class="carrousel">
        <div>1 </div>
        <div>2</div>
        <div>3</div>
    </section>

    <section class="boutons">

        
            <botton id='un'><input  type="radio" name="1" checked></botton>

        
            <div id='deux'><input  type="radio" name="1"></div>

        
            <div id='trois'><input  type="radio" name="1"></div>

       
    </section>

    <!-- fin du carrousel-->


    <section>


        <?php
			/* Start the Loop */
            $precedent = "XXXXXXX";
			while ( have_posts() ) :
				the_post();
                $titre_grand = get_the_title();
                $session = substr($titre_grand, 4,1);
                $nbHeure = substr($titre_grand, -4,3);
                $titre = substr($titre_grand, 8, -6); // ou $titre
                $sigle = substr($titre_grand,0 , 7);
                $typeCours = get_field('type_de_cours');
                if ($precedent =! $typeCours): ?>
        <?php
                 if ($precedent != "XXXXXXX") ?>
    </section>



    <?php endif ?>

    <!-- <h2> <?php echo $titre ?> </h2> -->

    <article>
        <p> <?php echo $sigle . " - " . $nbHeure . " - " . $typeCours; ?> </p>
        <a href="<?php echo get_permalink(); ?>"> <?php echo $titre; ?> </a>
        <p> Session <?php echo $session; ?> </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#264653" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,149.3C384,160,480,224,576,240C672,256,768,224,864,224C960,224,1056,256,1152,256C1248,256,1344,224,1392,208L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </article>

    <?php
    $precedent = $typeCours;
    endwhile; ?>

    </section>

    <?php
        endif;
    ?>

</main> <!-- #main -->

<?php
get_sidebar();
get_footer();