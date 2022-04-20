<?php get_header() ?>
<main class="principal">
    <h1>------ category.php groupe-1-----------</h1>
    <section class="formation">
    <?php  wp_nav_menu(array(
            "menu"=>"categorie_cours",
            "container" => "nav"));  ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <?php 
        $url_categorie_slug = trouve_la_categorie(array('cours','web','jeu','design', 'utilitaire', 'creation-3d', 'video'));
        ?>
        
        <?php
           $ordre = get_query_var('ordre', 'asc'); 
        ?>

        <a href="?cletri=title"></a>
        
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php get_template_part( "gabarits/content", "cours"); ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>