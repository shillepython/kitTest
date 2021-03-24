<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0"
            >
                <form action="{{ route('admin-settings-edit', app()->getLocale()) }}" method="post">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-gray-800 text-xl font-bold">{{ __('Site') }}</h6>
                            <x-jet-button class="bg-indigo-500 hover:bg-indigo-400">
                                {{ __('Save') }}
                            </x-jet-button>
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        @csrf
                        <h6
                            class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                        >
                            {{ __('Site information') }}
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-jet-label for="name" value="{{ __('Name site') }}" />
                                    <x-jet-input id="name" name="name" type="text" class="w-full transition-all duration-150" value="{{ config('app.name') }}"/>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <x-jet-label for="description" value="{{ __('Description site') }}" />
                                    <x-jet-input id="description" name="description" type="text" class="w-full transition-all duration-150"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>




            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0"
            >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-gray-800 text-xl font-bold">{{ __('Site') }}</h6>
                        <x-jet-button class="bg-indigo-500 hover:bg-indigo-400">
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>
                        <h6
                            class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                        >
                            Contact Information
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Address
                                    </label>
                                    <input
                                        type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                    />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        City
                                    </label>
                                    <input
                                        type="email"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        value="New York"
                                    />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Country
                                    </label>
                                    <input
                                        type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        value="United States"
                                    />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        Postal Code
                                    </label>
                                    <input
                                        type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        value="Postal Code"
                                    />
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-gray-400" />

                        <h6
                            class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                        >
                            About Me
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        htmlFor="grid-password"
                                    >
                                        About me
                                    </label>
                                    <textarea
                                        type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                        rows="4"
                                    >
                                A beautiful UI Kit and Admin for JavaScript & Tailwind CSS. It is Free
                                and Open Source.
                              </textarea
                              >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="w-full lg:w-4/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
            >
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4 flex justify-center -mt-10">
                            <div class="relative">
                                <span class="block rounded-full w-20 h-20">
                                    <img
                                        alt="{{ Auth::user()->name }}"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        class="shadow-xl rounded-full align-middle border-none absolute h-20 w-20 object-cover"/>
                                </span>
                            </div>
                        </div>
                        <div class="w-full px-4 text-center">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            22
                          </span>
                                    <span class="text-sm text-gray-500">Friends</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            10
                          </span>
                                    <span class="text-sm text-gray-500">Photos</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            89
                          </span>
                                    <span class="text-sm text-gray-500">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3
                            class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                        >
                            Jenna Stones
                        </h3>
                        <div
                            class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                        >
                            <i
                                class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                            ></i>
                            Los Angeles, California
                        </div>
                        <div class="mb-2 text-gray-700 mt-10">
                            <i
                                class="fas fa-briefcase mr-2 text-lg text-gray-500"
                            ></i>
                            Solution Manager - Creative Tim Officer
                        </div>
                        <div class="mb-2 text-gray-700">
                            <i
                                class="fas fa-university mr-2 text-lg text-gray-500"
                            ></i>
                            University of Computer Science
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-gray-300 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                    An artist of considerable range, Jenna the name taken
                                    by Melbourne-raised, Brooklyn-based Nick Murphy
                                    writes, performs and records all of his own music,
                                    giving it a warm, intimate feel with a solid groove
                                    structure. An artist of considerable range.
                                </p>
                                <a
                                    href="javascript:void(0);"
                                    class="font-normal text-pink-500"
                                >
                                    Show more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="block py-4">
        <div class="container mx-auto px-4">
            <hr class="mb-4 border-b-1 border-gray-300" />
            <div
                class="flex flex-wrap items-center md:justify-between justify-center"
            >
                <div class="w-full md:w-4/12 px-4">
                    <div
                        class="text-sm text-gray-600 font-semibold py-1 text-center md:text-left"
                    >
                        Copyright © <span id="get-current-year"></span>
                        <a
                            href="https://www.creative-tim.com?ref=njs-settings"
                            class="text-gray-600 hover:text-gray-800 text-sm font-semibold py-1"
                        >
                            Creative Tim
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                    <ul
                        class="flex flex-wrap list-none md:justify-end justify-center"
                    >
                        <li>
                            <a
                                href="https://www.creative-tim.com?ref=njs-settings"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://www.creative-tim.com/presentation?ref=njs-settings"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                About Us
                            </a>
                        </li>
                        <li>
                            <a
                                href="http://blog.creative-tim.com?ref=njs-settings"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                Blog
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://github.com/creativetimofficial/notus-js/blob/master/LICENSE.md?ref=njs-settings"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                MIT License
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
