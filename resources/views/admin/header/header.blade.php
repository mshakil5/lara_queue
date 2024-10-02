
@if(Session::has('error'))
<div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
<p class="font-bold">
    {{ session::get('error') }}
</p>
</div>

@endif


@if(Session::has('success'))
<div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
<p class="font-bold">
    {{ session::get('success') }}
</p>
</div>

@endif

<h3 class="text-dark">Login Admin Name : {{ Auth::guard('admin')->user()->name }}</h3>
<h3 class="text-dark">Login Admin Email : {{ Auth::guard('admin')->user()->email }}</h3>

<header class="z-40 items-center w-full h-16 bg-white shadow-lg dark:bg-gray-700 rounded-2xl">
    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
        <div class="relative flex items-center w-full pl-1 lg:max-w-68 sm:pr-2 sm:ml-0">
            <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                <div class="relative flex items-center w-full h-full lg:w-64 group">
                    <div class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                        <svg fill="none" class="relative w-5 h-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>

                    <svg class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                        </path>
                    </svg>
                    <input type="text" class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input" placeholder="Search"/>
                        <div class="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">
                            +
                        </div>
                    </div>
                </div>

                <div class="relative flex items-center justify-end w-1/4 p-1 ml-5 mr-4 sm:mr-0 sm:right-auto" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    {{-- <a href="#" class="relative block" role="menuitem">
                        <img alt="profil" src="/images/person/1.jpg" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                    </a> --}}
                    <a href="{{ route('admin.logout') }}" method="get" class="block block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                        <span class="flex flex-col">
                            <span>
                                Logout
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
</header>