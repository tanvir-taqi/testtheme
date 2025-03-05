<?php
// Header Section
?>


<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <div id="header_area" class="<?php echo get_theme_mod('header_menu_position'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href=""> <img src=" <?php echo get_theme_mod('logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_id'=>'nav'))?>
                    <!-- <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Properties</a>
                            <ul>
                                <li><a href="">House</a>
                                    <ul>
                                        <li><a href="">Apartment</a></li>
                                        <li><a href="">Cottage</a></li>

                                    </ul>
                                </li>
                                <li><a href="">Land</a></li>

                            </ul>
                        </li>
                        <li><a href="">Services</a>
                            <ul>
                                <li><a href="">Buying</a></li>
                                <li><a href="">Selling</a></li>

                            </ul>
                        </li>
                        <li><a href="">Renting</a>
                            <ul>
                                <li><a href="">Long Term</a></li>
                                <li><a href="">Short Term</a></li>

                            </ul>
                        </li>
                        <li><a href="">FAQs</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="">Contact Us</a></li>

                    </ul> -->

                </di>
            </div>
        </div>
    </div>



    <?php wp_footer() ?>
</body>

</html>