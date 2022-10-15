<?php get_header(); ?>
<!-- design -->

<a href="#" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
    <span class="text-2xl"><i class="bx bx-home"></i></span>
    <span>Dashboard</span>
</a>

<div class="mt-2">
    <div class="border-b border-gray-200">
        <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
            <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
            <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
        </div>
    </div>
</div>
<?php get_footer(); ?>