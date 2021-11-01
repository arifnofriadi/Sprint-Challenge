<div id="menu" class="sticky top-0 z-10 flex-col hidden h-screen px-4 py-4 bg-white shadow-inner w-54 xl:w-64 2xl:w-80 lg:px-6 xl:px-8 lg:py-6 lg:flex">
    
    <!-- menu and logo-->
    <div class="flex-1 py-4">
      <a href="#" class="hidden md:block">
        <span class="sr-only">Edge SaaS</span>
        <img src="<?php echo base_url('images/sprint.png') ?>" alt="Menu Logo" class="w-20 h-20 mx-auto">
      </a>
      <nav class="-mx-2 md:mt-8">
        <ul class="pt-2 space-y-3 text-base">
          <li>
            <a href="<?php echo base_url('admin') ?>" class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-800 transition-colors duration-100 rounded-lg bg-blue-50 hover:bg-blue-50">
              <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
              </svg>
              <span class="flex-1">
                Dashboard
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/posts') ?>" class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-800 transition-colors duration-100 bg-white rounded-lg hover:bg-blue-50 text-opacity-70 hover:text-opacity-100">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"></path>
              </svg>
              <span class="flex-1">
                Posts
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/users') ?>" class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-800 transition-colors duration-100 bg-white rounded-lg hover:bg-blue-50 text-opacity-70 hover:text-opacity-100">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
              </svg>
              <span class="flex-1">
                Users
              </span>
            </a>
          </li>
          <li>
            <a href="<?php base_url() ?>/Home/logout" class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-800 transition-colors duration-100 bg-white rounded-lg hover:bg-blue-50 text-opacity-70 hover:text-opacity-100">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd"></path>
              </svg>
              <span class="flex-1">
                Logout
              </span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!--/ menu and logo -->

    <!-- profile link -->
    <button
      class="absolute left-0 flex-col items-center justify-center hidden w-full space-y-4 md:flex xl:w-auto xl:flex-row xl:justify-start xl:space-y-0 xl:space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60 xl:left-8 bottom-6">
      <img src="../../images/user.jpg" alt="<?php echo $users ?>" class="rounded-full w-14 h-14">
      <div class="flex flex-col items-center text-sm xl:items-start">
        <span class="font-bold text-blue-900 "><?php echo $users ?></span>
        <span class="text-sm font-bold text-blue-800 opacity-50">View profile</span>
      </div>
    </button>
    <!--/ profile link -->

  </div>