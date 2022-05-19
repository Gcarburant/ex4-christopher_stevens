<?php
get_header();
/**
* Template Name: atelier a venir
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <section class="atelier">
     <h1>---- template-atelier.php ------</h1>
     <?php if (have_posts()):  the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <?php the_title() ?>
     <p class='atelier__resume'><?php the_field('description'); ?></p>
     <p class='atelier__animateur'><?php the_field('animateur'); ?></p> 
     <p class='atelier__dateDebut'><?php the_field('dateDebut'); ?></p>
     <p class='atelier__dateFin'><?php the_field('dateFin'); ?></p>
     <p class='atelier__heure'><?php the_field('heure'); ?></p>
     <p class='atelier__JoursSemaine'><?php the_field('JoursSemaine'); ?></p>
     <p class='atelier__HeureDebut'><?php the_field('HeureDebut'); ?></p>
     <p class='atelier__HeureFin'><?php the_field('HeureFin'); ?></p>
     <p class='atelier__DuréeSeance'><?php the_field('DuréeSeance'); ?></p>
     <p class='atelier__local'><?php the_field('local'); ?></p>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>