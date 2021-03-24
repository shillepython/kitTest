<nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
>
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
    >
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
        >
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
           href="{{ route('admin-home', app()->getLocale()) }}">
            {{ config('app.name') }} {{ __("Panel") }}
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a
                    class="text-gray-600 block py-1 px-3"
                    href="#pablo"
                    onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
                    ></a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="notification-dropdown"
                >
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                    >
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Seprated link</a
                    >
                </div>
            </li>
            <li class="inline-block relative">
                <a
                    class="text-gray-600 block"
                    href="#pablo"
                    onclick="openDropdown(event,'user-responsive-dropdown')"
                >
                    <div class="items-center flex">
                  <span
                      class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                  ><img
                          alt="{{ Auth::user()->name }}"
                          class="w-full rounded-full align-middle border-none shadow-lg w-12 h-12"
                          src="{{ Auth::user()->profile_photo_url }}"
                      /></span></div
                    >
                </a>

                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-responsive-dropdown"
                >
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                    >
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Seprated link</a
                    >
                </div>
            </li>
        </ul>

        <x-admin.nav.nav-links/>


    </div>
</nav>
<div class="relative md:ml-64 bg-gray-100">
    <nav
        class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4"
    >
        <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
            <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">
                {{ $title }}
            </a>
            <form
                class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
            >
                <div class="relative flex w-full flex-wrap items-stretch">
                <span
                    class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
                ><i class="fas fa-search"></i
                    ></span>
                    <input
                        type="text"
                        placeholder="Search here..."
                        class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"
                    />
                </div>
            </form>
            <ul
                class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
                <a
                    class="text-gray-600 block"
                    href="#pablo"
                    onclick="openDropdown(event,'user-dropdown')"
                >
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full w-12 h-12 object-cover">
                        </span>
                    </div>
                </a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-dropdown"
                >
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                    >
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Seprated link</a
                    >
                </div>
            </ul>
        </div>
    </nav>

