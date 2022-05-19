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
     <p class='atelier__resume'><?php the_field('resume'); ?></p>
     <p class='atelier__endroit'><?php the_field('endroit'); ?></p> 
     <p><?php the_field('organisateur'); ?></p>
     <p><?php the_field('date'); ?></p>
     <p><?php the_field('heure'); ?></p>
     <?php 
     $image = get_field('image');
     if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
     <?php endif; ?>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>