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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href=""> <img src=" <?php echo get_theme_mod('logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <ul id="nav">
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

                    </ul>

                </div>
            </div>
        </div>
    </div>



    <?php wp_footer() ?>
</body>

</html>