<?php get_header(); /* Template Name: Página Orçamento */ ?> 

<main class="elastic">
    <?php if( have_rows('bloco_1') ): ?>
        <?php while ( have_rows('bloco_1') ) : the_row(); ?>
            <section class="block-1">
                <div class="banner-topo">
                    <?php if (DEVICE == 'mobile') { ?>
                        <img src="<?php the_sub_field('imagem_mobile'); ?>" alt="<?php the_sub_field('titulo_da_pagina'); ?>"/>
                    <?php } else { ?>
                        <img src="<?php the_sub_field('imagem_desktop'); ?>" alt="<?php the_sub_field('titulo_da_pagina'); ?>"/>
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
                <div class="content-page">
                <div class="center">
                    <div class="text-orcamento">
                        <h2><?php the_sub_field('titulo'); ?></h2>
                        <?php the_sub_field('descricao'); ?>    
                    </div>
                </div>
                </div>
            </section>
        <?php endwhile;	?>
    <?php endif; ?>

    <section class="block-3">
    <div class="center">
        <div class="orcamento">
        <?php echo do_shortcode('[contact-form-7 id="43" title="Formulário de Orçamento"]') ?>
        </div>
    </div>    
    </section>

</main>
<?php get_footer(); ?>