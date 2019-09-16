<?php if (!file_exists(_PATH . "instance/front/tpl/" . $modulePage)): ?>
    <?php include _PATH . "instance/front/tpl/404.php"; ?>
    <?php header("HTTP/1.0 404 Not Found"); ?>
    <?php die; ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Short Term Rental University ">
        <!--<link rel="shortcut icon" href="<?php print _MEDIA_URL ?>img/favicon.png" type="image/x-icon">--> 
        <title> STRU RENOVATION CALC | <?php print _cg("page_title"); ?></title>

        <!-- Libs CSS -->
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/fonts/Feather/feather.css">
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/libs/flickity/dist/flickity.min.css">
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/libs/flickity-fade/flickity-fade.css">
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/libs/aos/dist/aos.css">
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/libs/jarallax/dist/jarallax.css">
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/libs/highlightjs/styles/vs2015.css">
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">

        <!-- Map -->
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo _MEDIA_URL ?>assets/css/theme.min.css">

        <style>
            .parsley-errors-list.filled {
                color: red;
                list-style: none;
                padding-left: 0px;
                font-size: 12px;
                width: 100%;
            }

            .parsley-error{
                border: 1px solid red !important;
            }

            .parsley-required {
                font-size: 13px;
            }
        </style>

    </head>

    <body>

        <?php include _PATH . "instance/front/tpl/navbar.php"; ?>
        <?php include _PATH . 'instance/front/tpl/' . $modulePage; ?>
        <?php include _PATH . "instance/front/tpl/footer.php"; ?>

        <!-- Libs JS -->
        <script src="<?php echo _MEDIA_URL ?>assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/flickity-fade/flickity-fade.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/aos/dist/aos.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/jarallax/dist/jarallax.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/jarallax/dist/jarallax-video.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/jarallax/dist/jarallax-element.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/typed.js/lib/typed.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/countup.js/dist/countUp.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/highlightjs/highlight.pack.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

        <!-- Map -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

        <!-- Theme JS -->
        <script src="<?php echo _MEDIA_URL ?>assets/js/theme.min.js"></script>
        <script src="<?php echo _MEDIA_URL ?>assets/js/parsley.min.js"></script>

        <?php @include _PATH . 'instance/front/tpl/' . $jsInclude; ?>

    </body>
</html>