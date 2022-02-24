<?php get_header(); /* Template Name: Página A Empresa */ ?> 

<main class="elastic">

    <?php if( have_rows('bloco_1') ): ?>

        <?php while ( have_rows('bloco_1') ) : the_row(); ?>

            <section class="block-1">

                <div class="banner-topo">

                    <?php if (DEVICE == 'mobile') { ?>

                        <img src="<?php the_sub_field('banner'); ?>" alt="<?php the_sub_field('titulo_da_pagina'); ?>"/>

                    <?php } else { ?>

                        <img src="<?php the_sub_field('banner_pagina'); ?>" alt="<?php the_sub_field('titulo_da_pagina'); ?>"/>

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

                    <div class="sobre">

                        <h2><?php the_sub_field('titulo'); ?></h2>

                        <h3><?php the_sub_field('subtitulo'); ?></h3>

                        <?php the_sub_field('descricao'); ?>

                    </div>

                    <div class="blocos">

                    </div>

                    <div class="box">

                        <div class="left">

                            <?php if (DEVICE == 'mobile') { ?>

                                <img src="<?php the_sub_field('imagem_mobile'); ?>" alt="<?php the_sub_field('titulo_imagem'); ?>"/>

                            <?php } else { ?>

                                <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo_imagem'); ?>"/>

                            <?php } ?>

                        </div>

                        <div class="right">

                            <h3><?php the_sub_field('titulo_imagem'); ?></h3>

                            <div class="grafico-pedidos">

                                <?php if( have_rows('flags') ): ?>

                                    <?php while ( have_rows('flags') ) : the_row(); ?>

                                        <div class="pedido">

                                            <p>

                                                <?php the_sub_field('texto_pequeno'); ?>

                                                <span><?php the_sub_field('texto_grande'); ?></span>

                                            </p>

                                        </div>

                                    <?php endwhile;	?>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

        <?php endwhile;	?>

    <?php endif; ?>  



    <?php if( have_rows('bloco_3') ): ?>

        <?php while ( have_rows('bloco_3') ) : the_row(); ?>

            <section class="block-3">

                <div class="center">

                    <div class="text">

                        <h2><?php the_sub_field('titulo_linha_1'); ?><br/><?php the_sub_field('titulo_linha_2'); ?></h2>

                        <p><?php the_sub_field('descricao'); ?></p>

                        <a href="<?php the_sub_field('link'); ?>" class="button-faleconosco" title="Fale Conosco">Fale conosco</a>

                    </div>

                    <div class="galeria">

                        <?php if( have_rows('fullbanner') ): ?>

                            <?php while ( have_rows('fullbanner') ) : the_row(); ?>

                                <a href="<?php the_sub_field('link'); ?>" class="item">

                                    <?php if (DEVICE == 'mobile') { ?>

                                        <img src="<?php the_sub_field('banner_mobile'); ?>" alt="Fullbanner"/>

                                    <?php } else { ?>

                                        <img src="<?php the_sub_field('banner_desktop'); ?>" alt="Fullbanner"/>

                                    <?php } ?>

                                </a>

                            <?php endwhile;	?>

                        <?php endif; ?> 

                    </div>    

                </div>

            </section>

        <?php endwhile;	?>

    <?php endif; ?>  



    <?php if( have_rows('bloco_4') ): ?>

        <?php while ( have_rows('bloco_4') ) : the_row(); ?>

            <section class="block-4">

                <div class="center">

                    <h2><?php the_sub_field('titulo'); ?></h2>

                    <div class="content-services">

                        <?php if( have_rows('servicos') ): ?>

                            <?php while ( have_rows('servicos') ) : the_row(); ?>

                                <div class="service">

                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo_da_imagem'); ?>"/>

                                    <div class="button">

                                        <p><?php the_sub_field('titulo_da_imagem'); ?></p>

                                        <a href="<?php the_sub_field('link'); ?>" class="button-service" title="<?php the_sub_field('titulo_da_imagem'); ?>">Saiba mais</a>

                                    </div>

                                </div>

                            <?php endwhile;	?>

                        <?php endif; ?>

                    </div>

                </div>

            </section>

        <?php endwhile;	?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>