<?php get_header(); ?>

< id='cw' class="site-width">

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

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                </div>
                <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                    </svg>
                </span>
                Sign in
                </button>
            </div>
            </form>
        </div>
    </div>

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                <label for="full-name" class="sr-only">Full Name</label>
                <input id="full-name" name="full_name" type="text" autocomplete="text" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                <label for="username" class="sr-only">Username</label>
                <input id="username" name="username" type="text" autocomplete="text" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                </div>
                <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                <label for="confirm-password" class="sr-only">Confirm Password</label>
                <input id="confirm-password" name="confirm-password" type="password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                </div>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Subscription Price</label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <span class="text-gray-500 sm:text-sm">$</span>
                    </div>
                    <input type="text" name="price" id="price" class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="0.00">
                    <div class="absolute inset-y-0 right-0 flex items-center">
                    <label for="currency" class="sr-only">Currency</label>
                    <select id="currency" name="currency" class="h-full rounded-md border-transparent bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option>USD</option>
                        <option>CAD</option>
                        <option>EUR</option>
                    </select>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                    </svg>
                </span>
                Sign Up
                </button>
            </div>
            </form>
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

    <div class="pointer-events-auto w-screen max-w-md">
        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
            <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                <div class="ml-3 flex h-7 items-center">
                <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Close panel</span>
                    <!-- Heroicon name: outline/x-mark -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
            </div>

            <div class="mt-8">
                <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                    <li class="flex py-6">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                            <a href="#">Throwback Hip Bag</a>
                            </h3>
                            <p class="ml-4">$90.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                        </div>
                        <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Qty 1</p>

                        <div class="flex">
                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                        </div>
                    </div>
                    </li>

                    <li class="flex py-6">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                        <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                            <a href="#">Medium Stuff Satchel</a>
                            </h3>
                            <p class="ml-4">$32.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Blue</p>
                        </div>
                        <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Qty 1</p>

                        <div class="flex">
                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                        </div>
                    </div>
                    </li>

                    <!-- More products... -->
                </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p>$262.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
            <div class="mt-6">
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>
                or
                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Continue Shopping
                    <span aria-hidden="true"> &rarr;</span>
                </button>
                </p>
            </div>
        </div>
    </div>
    </div>

</div>

<?php get_footer(); ?>