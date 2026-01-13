<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-slate-800 bg-slate-900 px-5 text-white lg:static lg:translate-x-0 transition-all duration-300"
>
  <!-- SIDEBAR HEADER -->
  <div
    :class="sidebarToggle ? 'justify-center' : 'justify-between'"
    class="flex items-center gap-2 pt-8 sidebar-header pb-7"
  >
    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
      <span class="logo flex items-center gap-2 font-bold text-xl text-white" :class="sidebarToggle ? 'hidden' : ''">
         <div class="h-8 w-8 rounded-lg bg-blue-600 flex items-center justify-center">
            <span class="text-white text-lg">P</span>
         </div>
         <span>EnviroAnalytix Admin</span>
      </span>

      <div
        class="logo-icon h-8 w-8 rounded-lg bg-blue-600 flex items-center justify-center lg:hidden"
        :class="sidebarToggle ? 'lg:flex' : 'hidden'"
      >
        <span class="text-white text-lg">P</span>
      </div>
    </a>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar"
  >
    <!-- Sidebar Menu -->
    <nav x-data="{selected: $persist('Dashboard')}">
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 text-xs uppercase leading-[20px] text-slate-400 font-semibold tracking-wider">
          <span
            class="menu-group-title"
            :class="sidebarToggle ? 'lg:hidden' : ''"
          >
            MENU
          </span>
           <span :class="sidebarToggle ? 'lg:block hidden' : 'hidden'" class="text-center">...</span>
        </h3>

        <ul class="flex flex-col gap-2 mb-6">
          <!-- Menu Item Dashboard -->
          <li>
            <a
              href="{{ route('admin.dashboard') }}"
              class="group relative flex items-center gap-2.5 rounded-lg px-4 py-2.5 font-medium duration-300 ease-in-out hover:bg-slate-800"
              :class="(selected === 'Dashboard') || (page === 'ecommerce') ? 'bg-blue-600 text-white' : 'text-slate-300'"
              @click="selected = 'Dashboard'"
            >
              <svg
                class="fill-current"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M10 1.66667L1.66667 9.16667H3.33333V18.3333H7.5V12.5H12.5V18.3333H16.6667V9.16667H18.3333L10 1.66667Z" />
              </svg>

              <span :class="sidebarToggle ? 'lg:hidden' : ''">Dashboard</span>
            </a>
          </li>

          <!-- Menu Item Hero Section -->
          
          <!-- Add other menu items here as needed, commenting out unused ones for now if not implemented -->
          
        </ul>
      </div>
    </nav>
  </div>
</aside>
