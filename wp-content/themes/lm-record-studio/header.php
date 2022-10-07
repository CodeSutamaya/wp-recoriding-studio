<!DOCTYPE html>
<html>

<head>
    <?php require('dfunction.php'); ?>


    <title><?php if (is_category()) {
                echo 'Category Archive for &quot;';
                single_cat_title();
                echo '&quot; | ';
                bloginfo('name');
            } elseif (is_tag()) {
                echo 'Tag Archive for &quot;';
                single_tag_title();
                echo '&quot; | ';
                bloginfo('name');
            } elseif (is_archive()) {
                wp_title('');
                echo ' Archive | ';
                bloginfo('name');
            } elseif (is_search()) {
                echo 'Search for &quot;' . wp_specialchars($s) . '&quot; | ';
                bloginfo('name');
            } elseif (is_home()) {
                bloginfo('name');
                echo ' | ';
                bloginfo('description');
            } elseif (is_front_page()) {
                wp_title('');
            } elseif (is_page()) {
                wp_title('');
            } elseif (is_404()) {
                echo 'Error 404 Not Found | ';
                bloginfo('name');
            } elseif (is_single()) {
                wp_title('');
            } else {
                echo wp_title('');
                echo ' | ';
                bloginfo('name');
            } ?></title>
    <?php
    global $tipe, $tipe_atas;

    if (is_home()) {                  //termasuk halaman front_page
        $tipe = "home";
        $tipe_atas = "indexz.php";
    } //else if(is_front_page()){       //termasuk halaman page (x kemungkinan salah x)    }
    else if (is_page()) {
        $arr_dmeta = arr_meta_post("_meta_page");

        //    echo "<pre>";
        //    print_r($arr_dmeta);
        //    echo "</pre>";

        foreach ($arr_dmeta as $index => $value) {
            global ${$index};
            ${$index} = $value;
        }
        $tipe = $save_jenis_design;

        if ($tipe == "produk") {
            if (isset($_REQUEST['jenis'])) {
                $get_jenis = $_REQUEST['jenis'];
                if ($get_jenis == "produk-bread") $tipe = "produk-bread";
                else if ($get_jenis == "produk-cake") $tipe = "produk-cake";
                else if ($get_jenis == "produk-other") $tipe = "produk-other";
                else $tipe = "produk";
            }
        }

        $tipe_atas = "page.php";
    } else if (is_category()) {         //termasuk halaman archive
        $tipe = "category";
        $tipe_atas = "category.php";
    } else if (is_tag()) {              //termasuk halaman archive
        $tipe = "tag";
        $tipe_atas = "tag.php";
    } else if (is_author()) {           //termasuk halaman archive
        $tipe = "author";
        $tipe_atas = "author.php";
    } else if (is_archive()) {
        $tipe = "archive";
        $tipe_atas = "archive.php";
    } else if (is_search()) {
        $tipe = "search";
        $tipe_atas = "search.php";
    } else if (is_404()) {
        $tipe = "404";
        $tipe_atas = "404.php";
    } else if (is_single()) {
        $post_type = get_post_type($post_id);
        if ($post_type == 'event') $tipe = 'single-event';
        if ($post_type == 'roti') $tipe = 'single-bread';
        if ($post_type == 'cake') $tipe = 'single-cake';
        if ($post_type == 'other') $tipe = 'single-other';

        $tipe_atas = "single.php";
    }
    ?>

    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/" type="image/x-icon">



    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/slick-theme.css" />

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/respond.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/jquery.tabSlideOut.v1.3.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#backToTop').fadeIn('slow');
                } else {
                    $('#backToTop').fadeOut('slow');
                }
            });
            $('#backToTop').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });
    </script>

    <script>
        $(function() {
            $('.slide-out-div').tabSlideOut({
                tabHandle: '.handle',
                tabLocation: 'right',
                speed: 300,
                action: 'click',
                topPos: '30%',
                fixedPosition: true
            });

        });
    </script>

</head>

<body>


    <div class="enquiry-message" id='hasil_pesan' style='display:none;'>

    </div>

    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.blockUI.js'></script>
    <script>
        $(document).ready(function() {
            $('.submit-pesan').click(function() {

                jQuery.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'text',
                        ada_pesan2: '1',
                        Emailto: '<?php global $save_default_email;
                                    echo $save_default_email; ?>',
                        Judulsitus: '<?php bloginfo('name'); ?>',
                        Firstname: $(".form_samping input[name='Fullname']").val(),
                        Telephone: $(".form_samping input[name='Telephone']").val(),
                        Email: $(".form_samping input[name='Email']").val()
                    },
                    success: function(data) {
                        //alert("Data: " + data);
                        //buat #demo 1 jadi pesan hasil ajax

                        $('#hasil_pesan').html(data);
                        //                        $('#hasil_pesan').css('display', 'block');
                        $.blockUI({
                            message: $('#hasil_pesan'),
                            css: {
                                width: '100%',
                                height: '100%',
                                backgroundColor: 'transparant',
                                left: '0',
                                top: '0'
                                //                                border:'5px solid #416FA0'
                            }
                        });
                        setTimeout($.unblockUI, 3000);
                        $('.blockOverlay').click($.unblockUI);
                        $('.pesan_cu_fast').click($.unblockUI);
                    }

                });
            });
            $('.submit-pesan2').click(function() {

                jQuery.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'text',
                        ada_pesan1: '1',
                        Emailto: '<?php global $save_default_email;
                                    echo $save_default_email; ?>',
                        Judulsitus: '<?php bloginfo('name'); ?>',
                        Firstname: $(".form_samping2 input[name='Fullname2']").val(),
                        Telephone: $(".form_samping2 input[name='Telephone2']").val(),
                        Email: $(".form_samping2 input[name='Email2']").val()
                    },
                    success: function(data) {
                        //alert("Data: " + data);
                        //buat #demo 1 jadi pesan hasil ajax

                        $('#hasil_pesan').html(data);
                        //                        $('#hasil_pesan').css('display', 'block');
                        $.blockUI({
                            message: $('#hasil_pesan'),
                            css: {
                                width: '100%',
                                height: '100%',
                                backgroundColor: 'transparant',
                                left: '0',
                                top: '0'
                                //                                border:'5px solid #416FA0'
                            }
                        });
                        setTimeout($.unblockUI, 3000);
                        $('.blockOverlay').click($.unblockUI);
                        $('.pesan_cu_fast').click($.unblockUI);
                    }

                });
            });
        });
    </script>


    <div class="slide-out-div" id="slide-out">
        <a class="handle" href="#">Free Solution</a>

        <div class="enquiry-message">
            Testing Message!!!!
        </div>

        <form method="post" action="" class='form_samping2'>
            <input type='text' name='ada_pesan1' id='ada_pesan1' value='2' readonly style='display:none;'></input>

            <div class="solution-row">
                <input type="text" placeholder="Full Name" class="book-input" name="FullName2" />
            </div>

            <div class="solution-row">
                <input type="text" placeholder="Telephone number" class="book-input" name="Telephone2" />
            </div>

            <div class="solution-row">
                <input type="text" placeholder="E-mail address" class="book-input" name="Email2" />
            </div>

            <div class="solution-row-btn">
                <input type="button" class="submit-pesan2 btn-book2" value="Book Now" name="Submit Book" />
            </div>

        </form>
    </div>

    <center>

        <div id='mw' class='site-width'>

            <header id='hw' class='hw-parent site-width relative'>

                <div class="hw-logo left">

                    <a href="<?php echo home_url(); ?>">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/logo.png" alt="" style="max-width: 100%; width: auto;" />

                    </a>

                </div>

                <div class="header-right right">

                    <div class="hw-sm">
                        <?php
                        global $save_active_twitter, $save_twitter;
                        global $save_active_facebook, $save_facebook;
                        global $save_active_gplus, $save_gplus;
                        global $save_active_youtube, $save_youtube;
                        if ($save_active_facebook == 'on') {
                        ?>
                            <a href="<?php echo $save_facebook; ?>" class="sm-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/fb.png" alt="" style="width: 100%;" />
                            </a>
                        <?php
                        }
                        if ($save_active_twitter == 'on') {
                        ?>
                            <a href="<?php echo $save_twitter; ?>" class="sm-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/twit.png" alt="" style="width: 100%;" />
                            </a>
                        <?php
                        }
                        if ($save_active_gplus == 'on') {
                        ?>
                            <a href="<?php echo $save_gplus; ?>" class="sm-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/gplus.png" alt="" style="width: 100%;" />
                            </a>
                        <?php
                        }
                        if ($save_active_youtube == 'on') {
                        ?>
                            <a href="<?php echo $save_youtube; ?>" class="sm-link">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/youtube.png" alt="" style="width: 100%;" />
                            </a>
                        <?php
                        }
                        ?>

                    </div>

                    <div class="hw-text">

                        <div class="hw-phone">
                            <?php echocs('save_default_phone'); ?>
                        </div>

                        <a href="mailto:<?php echocs('save_default_email'); ?>" class="hw-email">
                            Click here to email us
                        </a>

                    </div>

                </div>

                <div class="clear"></div>

            </header><?php //End hw 
                        ?>