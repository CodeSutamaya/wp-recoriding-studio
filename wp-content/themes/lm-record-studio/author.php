<?php get_header(); ?>
<!-- design -->

<a href="#" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
    <span class="text-2xl"><i class="bx bx-home"></i></span>
    <span>Dashboard</span>
</a>

<div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
    <div class="flex items-center justify-between px-4">
    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
    <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
        <span class="sr-only">Close menu</span>
        <!-- Heroicon name: outline/x-mark -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    </div>

<?php get_footer(); ?>