<header
  x-data="{menuToggle: false}"
  class="sticky top-0 z-99999 flex w-full border-b border-slate-800 bg-slate-900 lg:border-b"
>
  <div
    class="flex grow flex-col items-center justify-between lg:flex-row lg:px-6"
  >
    <div
      class="flex w-full items-center justify-between gap-2 border-b border-slate-800 px-3 py-3 sm:gap-4 lg:justify-normal lg:border-b-0 lg:px-0 lg:py-4"
    >
      <!-- Hamburger Toggle BTN -->
      <button
        class="z-99999 flex h-10 w-10 items-center justify-center rounded-lg border border-slate-700 bg-slate-800 text-slate-400 lg:h-11 lg:w-11"
        @click.stop="sidebarToggle = !sidebarToggle"
      >
        <svg
          class="fill-current"
          width="20"
          height="18"
          viewBox="0 0 20 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
            fill=""
          />
        </svg>
      </button>
      <!-- Hamburger Toggle BTN -->

      <div class="hidden lg:block">
        <form>
          <div class="relative">
            <span class="absolute top-1/2 left-4 -translate-y-1/2">
              <svg
                class="fill-slate-400"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M3.04175 9.37363C3.04175 5.87693 5.87711 3.04199 9.37508 3.04199C12.8731 3.04199 15.7084 5.87693 15.7084 9.37363C15.7084 12.8703 12.8731 15.7053 9.37508 15.7053C5.87711 15.7053 3.04175 12.8703 3.04175 9.37363ZM9.37508 1.54199C5.04902 1.54199 1.54175 5.04817 1.54175 9.37363C1.54175 13.6991 5.04902 17.2053 9.37508 17.2053C11.2674 17.2053 13.003 16.5344 14.357 15.4176L17.177 18.238C17.4699 18.5309 17.9448 18.5309 18.2377 18.238C18.5306 17.9451 18.5306 17.4703 18.2377 17.1774L15.418 14.3573C16.5365 13.0033 17.2084 11.2669 17.2084 9.37363C17.2084 5.04817 13.7011 1.54199 9.37508 1.54199Z"
                  fill=""
                />
              </svg>
            </span>
            <input
              type="text"
              placeholder="Search or type command..."
              class="h-11 w-full rounded-lg border border-slate-700 bg-slate-800 py-2.5 pr-14 pl-12 text-sm text-white placeholder:text-slate-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none xl:w-[430px]"
            />

            <button
              class="absolute top-1/2 right-2.5 inline-flex -translate-y-1/2 items-center gap-0.5 rounded border border-slate-600 bg-slate-700 px-2 py-1 text-xs text-slate-400"
            >
              <span> ⌘ </span>
              <span> K </span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <div
      :class="menuToggle ? 'flex' : 'hidden'"
      class="w-full items-center justify-between gap-4 px-5 py-4 lg:flex lg:justify-end lg:px-0"
    >
      <div class="flex items-center gap-4">
        <!-- User Area -->
        <div
          class="relative"
          x-data="{ dropdownOpen: false }"
          @click.outside="dropdownOpen = false"
        >
          <a
            class="flex items-center gap-3"
            href="#"
            @click.prevent="dropdownOpen = ! dropdownOpen"
          >
            <span class="h-10 w-10 overflow-hidden rounded-full bg-slate-700">
               <!-- Placeholder or user image -->
               <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2563EB&color=fff" alt="User" />
            </span>

            <span class="hidden text-right lg:block">
              <span class="block text-sm font-medium text-white">{{ Auth::user()->name }}</span>
              <span class="block text-xs text-slate-400">{{ Auth::user()->email }}</span>
            </span>

            <svg
              :class="dropdownOpen && 'rotate-180'"
              class="hidden fill-current text-slate-400 lg:block"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                fill=""
              />
            </svg>
          </a>

          <!-- Dropdown Start -->
          <div
            x-show="dropdownOpen"
            class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-lg border border-slate-700 bg-slate-800 shadow-lg"
          >
            <ul class="flex flex-col gap-5 border-b border-slate-700 px-6 py-4">
              <li>
                <a
                  href="{{ route('profile.edit') }}"
                  class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-blue-500 text-slate-300"
                >
                  <svg
                    class="fill-current"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                     <!-- Person Icon -->
                     <path d="M11 11C13.2091 11 15 9.20914 15 7C15 4.79086 13.2091 3 11 3C8.79086 3 7 4.79086 7 7C7 9.20914 8.79086 11 11 11Z" fill=""/>
                     <path d="M11 14C6.02944 14 2 15.7909 2 18C2 20.2091 6.02944 22 11 22C15.9706 22 20 20.2091 20 18C20 15.7909 15.9706 14 11 14Z" fill=""/>
                  </svg>
                  My Profile
                </a>
              </li>
            </ul>
            <div class="px-6 py-4">
               <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-blue-500 text-slate-300"
                >
                     <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 4L12.59 5.41L15.17 8H4V10H15.17L12.59 12.59L14 14L19 9L14 4Z" />
                        <path d="M2 2H10V4H2V18H10V20H2C0.9 20 0 19.1 0 18V4C0 2.9 0.9 2 2 2Z" />
                     </svg>
                    Sign Out
                </button>
               </form>
            </div>
          </div>
          <!-- Dropdown End -->
        </div>
      </div>
    </div>
  </div>
</header>
