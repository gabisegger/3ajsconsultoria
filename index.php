<?php get_header(); /* Template Name: Página Home */ ?>

<main class="elastic">



    <?php if( have_rows('bloco_1') ): ?>

        <?php while ( have_rows('bloco_1') ) : the_row(); ?> 

            <section class="block-1">

                <ul class="fullbanner">

                    <?php if( have_rows('full_banner') ): ?>

                        <?php while ( have_rows('full_banner') ) : the_row(); ?> 

                            <li>

                                <a href="<?php the_sub_field('link_do_banner'); ?>">

                                    <?php if (DEVICE == 'mobile') { ?>

                                        <img src="<?php the_sub_field('imagem_mobile'); ?>" alt="<?php the_sub_field('titulo_do_banner'); ?>"/>

                                    <?php } else { ?>

                                        <img src="<?php the_sub_field('imagem_desktop'); ?>" alt="<?php the_sub_field('titulo_do_banner'); ?>"/>

                                    <?php } ?>

                                </a>

                            </li>

                        <?php endwhile;	?>

                    <?php endif; ?>

                </ul>

            </section>

        <?php endwhile;	?>

    <?php endif; ?>



    <?php if( have_rows('bloco_2') ): ?>

        <?php while ( have_rows('bloco_2') ) : the_row(); ?>

            <section class="block-2">

                <div class="center">

                    <div class="icon">

                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo_do_bloco'); ?>">

                    </div>

                    <div class="content">

                        <div class="title"> 

                            <h2>

                                <?php the_sub_field('titulo_do_bloco'); ?>

                            </h2>

                        </div> 

                        <div class="text test">

                            <p>
                                <?php the_sub_field('descricao'); ?>
                            </p>

                        </div>

                        <br/>

                    </div>

                    <div class="button">

                        <a href="<?php the_sub_field('link_do_botao'); ?>" class="button-saibamais" title="Saiba mais sobre a 3AJS Consultoria">Saiba mais!</a>

                    </div>

                </div>

            </section>

        <?php endwhile;	?>

    <?php endif; ?>



    <?php if( have_rows('bloco_3') ): ?>

        <?php while ( have_rows('bloco_3') ) : the_row(); ?>

            <section class="block-3">

                <div class="center">

                    <div class="boxes">

                        <?php if( have_rows('blocos') ): ?>

                            <?php while ( have_rows('blocos') ) : the_row(); ?>

                                <div class="box">

                                    <div class="icon-service">

                                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo_bloco'); ?>">

                                    </div>



                                    <div class="content-service">

                                        <h3><?php the_sub_field('titulo_bloco'); ?></h3>

                                        <?php the_sub_field('descricao'); ?>

                                    </div>

                                </div>

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

                <?php if (DEVICE == 'mobile') { ?>

                    <img src="<?php the_sub_field('imagem_mobile'); ?>" alt="Banner"/>

                <?php } else { ?>

                    <img src="<?php the_sub_field('imagem_desktop'); ?>" alt="Banner"/>

                <?php } ?>

            </section>

        <?php endwhile;	?>

    <?php endif; ?> 



    <?php if( have_rows('bloco_5') ): ?>

        <?php while ( have_rows('bloco_5') ) : the_row(); ?>

            <section class="block-5">

                <div class="center">

                    <div class="budget">

                        <img src="<?php echo get_bloginfo("template_url"); ?>/assets/img/calculation.png" alt="icon"/>

                        <h2>Orçamento</h2>

                        <a href="<?php the_sub_field('link'); ?>" class="button-orçamento" title="Envie uma cotação">Enviar cotação!</a>

                    </div>
                </div>    

            </section>

        <?php endwhile;	?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>