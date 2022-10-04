<?php get_header(); ?>

<div id='cw' class="site-width">

    <div class="banner" style="background-image: url('<?php echocs('save_banner_image'); ?>');">

        <div class="banner-info left">

            <h2 class="banner-title">
                <?php echocs('save_banner_title'); ?><br />
                <span><?php echocs('save_banner_text'); ?></span>
            </h2>

            <div class="banner-desc">
                <?php echocs('save_banner_summary'); ?>
            </div>

            <ul class="banner-list">

                <?php
                global $save_banner_list;
                $listnya = $save_banner_list;
                $arr_list = explode_v2_delnull("&lt;br /&gt;", $listnya);
                $byk_list = count($arr_list);

                for ($i = 0; $i < $byk_list; $i++) {
                ?>
                    <li><?php echo $arr_list[$i]; ?></li>
                <?php
                }
                ?>
            </ul>

            <div class="bg-banner"></div>

        </div>

        <div class="clear"></div>

    </div>


    <div class="hp-gallery">

        <div class="hp-gallery-top">

            <div class="hp-gall-logo">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/logo-gall.png" alt="" style="max-width: 100%; width: auto;" />

            </div>

            <h3 class="page-title">
                Gallery
            </h3>

            <div class="page-title-desc desc2">
                GET IN TOUCH WITH US : <?php echocs('save_default_phone'); ?>
            </div>

        </div>

        <div class="hp-gall">

            <?php
            global $slider_set;
            for ($i = 0; $i < count($slider_set); $i++) {

                $title = "";
                $image = "";
                foreach ($slider_set[$i] as $index => $value) {
                    $value = str_solved($value);
                    $value = str_unsafe($value);
                    if ($index == 'title') $title = $value;
                    if ($index == 'image') $image = $value;
                }
            ?>

                <div class="g1">

                    <div class="hp-gallery-box">

                        <div class="img-box1" style="background-image: url('<?php echo $image; ?>');">

                            <div class="img-magni1">
                                <a class="light_box magni1" href="<?php echo $image; ?>" data-lightbox="project">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/magni.png" alt="" style="width: 100%;" />
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            <?php
            }
            ?>


        </div>

    </div>



    <div class="hp-article">

        <h1 class="page-title border">
            <?php echocs('save_content_text1'); ?> - <span><?php echocs('save_content_text2'); ?></span>
        </h1>

        <div class="hp-article-text border">
            <?php echocs('save_content_desc'); ?>
        </div>

        <div class="page-title-desc border">
            <?php echocs('save_content_text3'); ?>
        </div>

    </div>

    <div class="hp-book">

        <div class="hp-gall-logo">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/logo-form.png" alt="" style="max-width: 100%; width: auto;" />

        </div>

        <h3 class="page-title">
            BOOK NOW
        </h3>

        <div class="page-title-desc desc2">
            PLEASE CALL US TODAY: <?php echocs('save_default_phone'); ?>
        </div>





        <div class="hp-book-box">

            <form action="" method="post" class='form_samping'>
                <input type='text' name='ada_pesan2' id='ada_pesan2' value='1' readonly style='display:none;'></input>

                <input type="text" name="Fullname" placeholder="Full Name" class="input-book" />

                <input type="text" name="Telephone" placeholder="Telephone number" class="input-book" />

                <input type="text" name="Email" placeholder="E-mail address" class="input-book" />

                <input type="button" name="submit_book" value="Book Now" class="submit-pesan btn-book" />

            </form>

        </div>

    </div>

</div>

<?php get_footer(); ?>