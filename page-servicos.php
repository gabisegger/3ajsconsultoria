<?php get_header(); /* Template Name: Página Serviços */ ?>

<main class="elastic">
    <?php if( have_rows('bloco_1') ): ?>
        <?php while ( have_rows('bloco_1') ) : the_row(); ?> 
            <section class="block-1">
                <div class="banner-topo">
                    <?php if (DEVICE == 'mobile') { ?>
                        <img src="<?php the_sub_field('banner_mobile'); ?>" alt="<?php the_sub_field('titulo_da_pagina'); ?>"/>
                    <?php } else { ?>
                        <img src="<?php the_sub_field('banner_desktop'); ?>" alt="<?php the_sub_field('titulo_da_pagina'); ?>"/>
                    <?php } ?>
                </div>
                <div class="center title">
                    <div class="title-page">
                        <h1><?php the_sub_field('titulo_da_pagina'); ?></h1>
                    </div>
                </div>
                <div class="breadcumbs">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        }
                    ?>
                </div>
            </section>
        <?php endwhile;	?>
    <?php endif; ?>

    <?php if( have_rows('bloco_2') ): ?>
        <?php while ( have_rows('bloco_2') ) : the_row(); ?>
            <section class="block-2">
                <div class="center">
                    <h2><?php the_sub_field('titulo'); ?></h2>
                    <div class="content-services">
                        <?php if( have_rows('servicos') ): ?>
                            <?php while ( have_rows('servicos') ) : the_row(); ?>
                                <div class="service">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo_da_imagem'); ?>"/>
                                    <div class="button">
                                        <p><?php the_sub_field('titulo_da_imagem'); ?></p>
                                        <a href="<?php the_sub_field('link'); ?>" class="button-service" title="Serviço 1">Saiba mais</a>
                                    </div>
                                </div>
                            <?php endwhile;	?>
                        <?php endif; ?>        
                    </div> 
                </div>
            </section>
        <?php endwhile;	?>
    <?php endif; ?>


    <section class="block-3">
        <div class="center">
            <div class="orcamento">
                <h2>Solicite seu orçamento</h2>
                <?php echo do_shortcode('[contact-form-7 id="43" title="Formulário de Orçamento"]') ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>