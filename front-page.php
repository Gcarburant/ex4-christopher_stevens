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
<h2>le departement</h2>
<?php wp_nav_menu(array(
        "menu"=> "accueil",
        "container" => "nav")); ?>
        <h2>evenement</h2>
<?php wp_nav_menu(array(
        "menu"=> "accueil_evenement",
        "container" => "nav")); ?>
    <h1>Front-page</h1>
   <?php if (have_posts()): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>