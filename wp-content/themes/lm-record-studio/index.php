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
    <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
        <!-- logo -->
        <div class="flex items-center space-x-2">
            <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i class="bx bx-menu"></i></button>
            <div>Logo</div>
        </div>

        <!-- button profile -->
        <div>
            <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false" class="h-9 w-9 overflow-hidden rounded-full">
                <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" />
            </button>

            <!-- dropdown profile -->
            <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md" x-show="profileOpen" x-transition>
                <div class="flex items-center space-x-2 p-2">
                    <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                    <div class="font-medium">Hafiz Haziq</div>
                </div>

                <div class="flex flex-col space-y-3 p-2">
                    <a href="#" class="transition hover:text-blue-600">My Profile</a>
                    <a href="#" class="transition hover:text-blue-600">Edit Profile</a>
                    <a href="#" class="transition hover:text-blue-600">Settings</a>
                </div>

                <div class="p-2">
                    <button class="flex items-center space-x-2 transition hover:text-blue-600">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <div>Log Out</div>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="hp-article">

        <div class="page-title-desc">
            <?php echocs('save_content_text3'); ?>
        </div>

        <div class="hp-article-text">
            <?php echocs('save_content_desc'); ?>
        </div>

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
                PLEASE CALL US TODAY: <?php echocs('save_default_phone'); ?>
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


        <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                    <span class="absolute inset-0"></span>
                    Desk and Office
                    </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                </div>

                <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                    <span class="absolute inset-0"></span>
                    Self-Improvement
                    </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                </div>

                <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                    <a href="#">
                    <span class="absolute inset-0"></span>
                    Travel
                    </a>
                </h3>
                <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                </div>
            </div>
            </div>
        </div>
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