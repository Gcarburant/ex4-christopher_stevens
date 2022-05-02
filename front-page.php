<?php get_header() ?>
<main class="site__main">
<section class="animation">
    <div class="animation__bloc">B</div>
    <div class="animation__bloc">O</div>
    <div class="animation__bloc">N</div>
    <div class="animation__bloc">J</div>
    <div class="animation__bloc">O</div>
    <div class="animation__bloc">U</div>
    <div class="animation__bloc">R</div>
</section>
<h2>Le département TIM</h2>
<?php wp_nav_menu(array(
        "menu"=> "accueil",
        "container" => "nav")); ?>
<h2>Les événement de l'année</h2>
<?php wp_nav_menu(array(
        "menu"=> "evenement",
        "container" => "nav")); ?>        

   <?php if (have_posts()): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>