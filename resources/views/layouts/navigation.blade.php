<div class="drawer">
    <input id="sidebar" type="checkbox" class="drawer-toggle" />
    <div class="flex flex-col drawer-content">
        <!-- Navbar -->
        <div class="w-full p-0 navbar bg-neutral">
            <div class="flex-none">
                <label for="sidebar" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </div>
            <div class="flex-1 px-2 mx-2">
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
                    </a>
                </div>
            </div>
            <div class="flex-none hidden lg:block">
                <ul class="menu menu-horizontal">
                    <!-- Navbar menu content here -->
                    <details class="dropdown-end dropdown">
                        <summary class="m-1 border-none btn bg-neutral">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </summary>
                        <ul class="menu dropdown-content z-[1] w-52 bg-neutral p-2 shadow">
                            <li><x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link></li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </ul>
                    </details>
                </ul>
            </div>
        </div>
    </div>
    <div class="drawer-side">
        <label for="sidebar" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="min-h-full p-4 menu w-80 bg-neutral">
            <li>
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
                </a>
            </li>
            <!-- Sidebar content here -->
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
        </ul>
    </div>
</div>
