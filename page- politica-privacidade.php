<?php get_header(); /* Template Name: Página Política de Privacidade */ ?>

<main class="elastic">
    <div class="block-1">
        <div class="center">
            <h2>Política de Privacidade</h2>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Não há conteúdo cadastrado</p>
            <?php endif; ?>
        </div>
    </div>


</main>

<?php get_footer(); ?>