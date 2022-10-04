        <div id="fw" class="fw-parent site-width">

            <div class="fw-logo left">

                <a href="<?php echo home_url(); ?>">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/logo.png" alt="" style="max-width: 100%; width: auto;" />

                </a>

            </div>

            <div class="footer-right right">

                <div class="fw-sm">

                    <?php
                    global $save_active_twitter, $save_twitter;
                    global $save_active_facebook, $save_facebook;
                    global $save_active_gplus, $save_gplus;
                    global $save_active_youtube, $save_youtube;
                    if ($save_active_facebook == 'on') {
                    ?>
                        <a href="<?php echo $save_facebook; ?>" class="sm-link">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/fb.png" alt="" style="width: 100%;" />
                        </a><br />
                    <?php
                    }
                    if ($save_active_twitter == 'on') {
                    ?>
                        <a href="<?php echo $save_twitter; ?>" class="sm-link">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/twit.png" alt="" style="width: 100%;" />
                        </a> <br />
                    <?php
                    }
                    if ($save_active_gplus == 'on') {
                    ?>
                        <a href="<?php echo $save_gplus; ?>" class="sm-link">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/gplus.png" alt="" style="width: 100%;" />
                        </a><br />
                    <?php
                    }
                    if ($save_active_youtube == 'on') {
                    ?>
                        <a href="<?php echo $save_youtube; ?>" class="sm-link">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dimages/youtube.png" alt="" style="width: 100%;" />
                        </a><br />
                    <?php
                    }
                    ?>
                </div>

                <div class="fw-text">

                    <div class="fw-phone">
                        <?php echocs('save_default_phone'); ?>
                    </div>

                    <a href="mailto:<?php echocs('save_default_email'); ?>" class="fw-email">
                        Click here to email us
                    </a>

                </div>

            </div>

            <div class="clear"></div>

        </div>

        </div>
        <!--End fw-->

        </div>
        <!--End mw-->

        </center>
        <a href="#" ID="backToTop"></a>

        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.hp-gall').slick({
                    infinite: true,
                    speed: 300,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow: 7,
                    slidesToScroll: 1,
                    arrows: false,
                    responsive: [{
                            breakpoint: 3000,
                            settings: {
                                slidesToShow: 8,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 1600,
                            settings: {
                                slidesToShow: 7,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 1079,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 649,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 499,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 349,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        </script>
        <?php wp_footer(); ?>
        </body>

        </html>