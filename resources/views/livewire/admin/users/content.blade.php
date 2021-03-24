<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6" role="alert">
                @if(session()->has('success') || session()->has('fail'))
                    <livewire:alert-success/>
                @endif
            </div>
            @if($errors->any())
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg border-l-4 shadow-lg border-yellow-400 bg-yellow-100 border-0 p-4" role="alert">
                    <ul class="list-disc pl-2 text-yellow-600">
                        @foreach($errors->all() as $error)
                            <li class="text-sm py-1 font-medium">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
    <div class="flex flex-wrap mt-4">

        <div class="w-full flex flex-wrap mb-12 xl:mb-0 px-4">



            @foreach($users as $user)

            <div class="w-1/3">
                    <div class="bg-white relative shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{$user->profile_photo_url}}" alt="" class="bg-white rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-2xl border-4 border-white">
                        </div>

                        <div class="mt-16">
                            <h1 class="font-bold text-center text-3xl text-gray-900">{{$user->name . ' ' . $user->surname}}</h1>
                            <p class="text-center text-sm text-gray-400 font-medium">Full Stack Developer at Pantazi Software</p>
                            <p>
                        <span>

                        </span>
                            </p>
                            <div class="my-5">
                                <a href="#" class="text-indigo-200 block text-center font-medium leading-6 px-6 py-3 bg-indigo-600">{{ __('Visit profile') }} <span class="font-bold lowercase">{{'@' . $user->name . $user->surname}}</span></a>
                            </div>


                            <div class="pb-10 uppercase text-center tracking-wide flex justify-around">
                                <div class="posts">
                                    <p class="text-gray-400 text-sm">{{ __('Tests') }}</p>
                                    <p class="text-lg font-semibold text-blue-300">{{ count($user->mark) }}</p>
                                </div>
                                <div class="followers">
                                    <p class="text-gray-400 text-sm">{{ __('Group') }}</p>
                                    <p class="text-lg font-semibold text-blue-300">

                                        @foreach($arr_group as $group)
                                            {{$group}}
                                        @endforeach
                                    </p>
                                </div>
                                <div class="following">
                                    <p class="text-gray-400 text-sm">Following</p>
                                    <p class="text-lg font-semibold text-blue-300">34</p>
                                </div>
                            </div>

                        </div>
                    </div>

            </div>
            @endforeach

        </div>
    </div>
    <footer class="block py-4">
        <div class="container mx-auto px-4">
            <hr class="mb-4 border-b-1 border-gray-300"/>
            <div
                class="flex flex-wrap items-center md:justify-between justify-center"
            >
                <div class="w-full md:w-4/12 px-4">
                    <div
                        class="text-sm text-gray-600 font-semibold py-1 text-center md:text-left"
                    >
                        Copyright © <span id="get-current-year"></span>
                        <a
                            href="https://www.creative-tim.com?ref=njs-dashboard"
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
                                href="https://www.creative-tim.com?ref=njs-dashboard"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://www.creative-tim.com/presentation?ref=njs-dashboard"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                About Us
                            </a>
                        </li>
                        <li>
                            <a
                                href="http://blog.creative-tim.com?ref=njs-dashboard"
                                class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                            >
                                Blog
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://github.com/creativetimofficial/notus-js/blob/master/LICENSE.md?ref=njs-dashboard"
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
