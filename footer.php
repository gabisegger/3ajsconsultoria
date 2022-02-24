    <footer class="elastic">

        <div class="center box-footer">

            <div class="logo">

                <a href="<?php echo get_bloginfo("url"); ?>" title="AJS Consultoria" rel="home">

                    <img src="<?php echo get_bloginfo("template_url"); ?>/assets/img/logo-white.png" alt="logo loja"/> 

                </a>

            </div>

            <div class="address">

                <div class="icons">

                    <a target="_blank" href="https://www.google.com/maps/place/<?php the_field('endereco', 'option'); ?>" class="pointer icon">

                        <span>

                            <?php echo file_get_contents( get_template_directory() . '/assets/img/svg/pointer.svg' ) ?>

                        </span>

                        <p><?php the_field('endereco', 'option'); ?></p>

                    </a>

                    <?php $replacePhone = str_replace(['(', ')', ' ', '-'], '' ,get_field('telefone', 'option')); ?>

                    <a target="_blank" href="tel:<?php echo $replacePhone; ?>" class="phone icon">

                        <span>

                            <?php echo file_get_contents( get_template_directory() . '/assets/img/svg/phone1.svg' ) ?>

                        </span>

                        <p><?php the_field('telefone', 'option'); ?></p>

                    </a>

                    <a target="_blank" href="mailto:<?php the_field('e-mail', 'option'); ?>" class="email icon">

                        <span>

                            <?php echo file_get_contents( get_template_directory() . '/assets/img/svg/email.svg' ) ?>

                        </span>

                        <p><?php the_field('e-mail', 'option'); ?></p>

                    </a>

                </div>

                

            </div>

            <div class="contact">

                <p>procurando por mais novidades?</p>

                <div class="form">

                    <?php echo do_shortcode('[contact-form-7 id="44" title="Formulário de Newsletter"]') ?>

                </div>

            </div>

        </div>

        <div class="footer-copyright">
            <p class="copyright">
                Copyright © 2021 III AJS Consultoria.  Todos os direitos reservados. | <a href="<?php echo get_bloginfo("url"); ?>/politica-de-privacidade">Política de privacidade</a>
            </p>
        </div>

        <div class="whatsapp">

            <a href="https://api.whatsapp.com/send?phone=5511954765499" title="AJS Consultoria" rel="home">

                <img src="<?php echo get_bloginfo("template_url"); ?>/assets/img/whatsapp.png" alt="whatsapp"/> 

            </a>

        </div>

        <div class="cookies">
            <p class="cookies-footer">
                Utilizamos cookies para personalizar anúncios e melhorar sua experiência no site. Ao continuar navegando, você concorda com a nossa 
                <a href="#" target="_blank">Política de Privacidade.</a>
            </p>
            <button class="btn-cookie">Continuar e fechar</button>
        </div>

    </footer>

    

    <?php wp_footer(); ?>

    

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>



    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>



    <script src="<?php echo get_bloginfo("template_url"); ?>/assets/js/actions.js"></script>

</body>

</html>