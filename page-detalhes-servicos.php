<?php get_header(); /* Template Name: Página Detalhes Serviços */ ?>



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

                <div class="content-page">

                <div class="center">

                    <div class="content-service">

                        <?php if (DEVICE == 'mobile') { ?>

                            <div class="menu-servicos">

                                <p class="floating-menu-service">Mais serviços</p>   

                            </div>

                        <?php } ?>

                        <div class="content-left">

                            <?php

                                $menu = array(

                                    'menu' => 'menu-header', 

                                    'container' => 'ul',

                                    'container_id' => 'menu-flutuante',

                                    'container_class' => 'menu-lateral', 

                                );

                                wp_nav_menu($menu); 

                            ?>

                            <div class="navigation">

                            <a href="#" class="btn-scroll">Orçar agora</a>    

                            </div>

                        </div>

                        <div class="content-right">

                            <div class="sobre-serviço">

                                <h1><?php the_sub_field('titulo'); ?></h1>

                                <h2><?php the_sub_field('subtitulo'); ?></h2>

                                <?php the_sub_field('descricao'); ?>

                            </div>

                        </div>

                    </div>

                </div>

                </div>

            </section>

        <?php endwhile;	?>

    <?php endif; ?>





    <section class="block-3">

        <div class="center">

            <div class="orcamento">

                <h2>Orçamento</h2>

                <?php echo do_shortcode('[contact-form-7 id="43" title="Formulário de Orçamento"]') ?>

            </div>

        </div>    

    </section>

</main>

<?php if (DEVICE == 'mobile') { ?>

    <div class="btn-orcamento btn-scroll">

        <a href="#">Solicite seu orçamento</a>  

    </div>

<?php } ?>


<?php get_footer(); ?>