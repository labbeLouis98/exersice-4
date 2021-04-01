<?php
/**
 * Template part for displaying page content front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

 global $tPropriete;
?>

<article class="slide__conteneur">
	<div class="slide">
	<img id="svg1" src="https://s2.svgbox.net/illlustrations.svg?ic=programing&color=000000">
		<div class="slide__info">
			<p> <?php echo $tPropriete ['sigle'] . " - " . $tPropriete ['nbHeure'] . " - " . $tPropriete ['typeCours']; ?>
			</p>
			<a href="<?php echo get_permalink(); ?>"> <?php echo $tPropriete ['titre']; ?> </a>
			<p> Session <?php echo $tPropriete ['session']; ?> </p>
		</div>
		<img id="svg3" src="https://s2.svgbox.net/illlustrations.svg?ic=app-development&color=000000">
	</div>
</article>


<!--div>
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
    </div-->