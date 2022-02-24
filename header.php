<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_url"); ?>/assets/css/style.css ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>3AJS Consultoria</title>
    <?php wp_head(); ?>
</head>

<?php
	require_once ('detect-mobile/Mobile_Detect.php'); //Detectar se for mobile
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'computer');
	define("DEVICE", $deviceType);
?>

<body <?php body_class(); ?>>
    <div class="fake-header"></div>
    <header class="elastic">
        <div class="center box-menu">
            <?php if (DEVICE == 'mobile') { ?>
                <div class="hamburger">
                    <img src="<?php echo get_bloginfo("template_url"); ?>/assets/img/svg/hamburger.svg" alt="menu"/> 
                </div>
            <?php } ?>
            <div class="logo">
                <a href="<?php echo get_bloginfo("url"); ?>" title="AJS Consultoria" rel="home">
                    <img src="<?php echo get_bloginfo("template_url"); ?>/assets/img/logo.png" alt="logo loja"/> 
                </a>
            </div>
            <div class="menu-header">
                <?php if (DEVICE == 'mobile') { ?>
                    <div class="bg-menu"></div>
                    <div class="menu-mobile">
                        <div class="header-menu">
                            <span class="title">Menu</span>
                            <div class="close-menu">+</div>
                        </div>
                        <?php
                            $menu = array(
                                'menu' => 'menu-header', 
                                'container' => 'ul',
                                'container_id' => 'menu-principal',
                                'container_class' => 'menu-header', 
                            );
                            wp_nav_menu($menu); 
                        ?>
                    </div>
                <?php } else { ?>
                    <?php
                        $menu = array(
                            'menu' => 'menu-header', 
                            'container' => 'ul',
                            'container_id' => 'menu-principal',
                            'container_class' => 'menu-header', 
                        );
                        wp_nav_menu($menu); 
                    ?>
                <?php } ?>
            </div>
            <div class="contact">
                <?php $replacePhone = str_replace(['(', ')', ' ', '-'], '' ,get_field('telefone', 'option')); ?>
                <a target="_blank" href="tel:550<?php echo $replacePhone ?>"> 
                <img src="<?php echo get_bloginfo("template_url"); ?>/assets/img/svg/phone.svg" alt="Ícone Telefone"/> <?php the_field('telefone', 'option'); ?>
                </a>
            </div>
        </div>
    </header>
