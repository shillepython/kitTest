<div class="px-4 md:px-10 mx-auto w-full -m-24 ">
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
    <div class="w-full px-4">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0"
        >
            <form action="{{route('store_test', app()->getLocale())}}" method="post">
            @csrf
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-gray-800 text-xl font-bold">{{ __('Site') }}</h6>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <h6 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase" >
                        {{ __('Site information') }}
                    </h6>
                    <div class="flex flex-wrap">
                        <div id="createTest" class=" w-full">

{{--                            <div class="w-full shadow mx-auto bg-white rounded-md mb-5">--}}
{{--                                <div class="w-full p-8">--}}
{{--                                    <x-jet-label value="Текст вопроса"/>--}}
{{--                                    <x-jet-input type="text" class="w-full bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform"/>--}}
{{--                                    <div class="block">--}}
{{--                                        <div class="py-4">--}}
{{--                                            <div class="border-t border-gray-200"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="lg:pl-12">--}}
{{--                                        <ul>--}}
{{--                                            <li class="mb-4" id="li-answer-1">--}}
{{--                                                <x-jet-label for="answer0" value="Текст ответа №1" class="lg:pl-10"/>--}}
{{--                                                <div class="flex flex-wrap items-center">--}}
{{--                                                    <div class="flex items-center mr-4 mb-4 pt-4">--}}
{{--                                                        <input required id="radio-answer0" value="answer0" type="radio"--}}
{{--                                                               name="radio-answer0" class="hidden"/>--}}
{{--                                                        <label for="radio-answer0" class="flex items-center cursor-pointer">--}}
{{--                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                    <x-jet-input type="text" id="answer0" name="answer0" class="lg:w-1/2 w-10/12 bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform"/>--}}
{{--                                                    <div id="answerClose-1" class="fa fa-times w-2/12 ml-4 text-xl text-gray-400 hover:text-red-500 transition duration-300 ease-out transform cursor-pointer"></div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}

{{--                                            <li class="mb-4">--}}
{{--                                                <x-jet-label for="answer1" value="Текст ответа №2" class="lg:pl-10"/>--}}
{{--                                                <div class="flex flex-wrap items-center">--}}
{{--                                                    <div class="flex items-center mr-4 mb-4 pt-4">--}}
{{--                                                        <input required id="radio-answer1" value="answer1" type="radio"--}}
{{--                                                               name="radio-answer0" class="hidden"/>--}}
{{--                                                        <label for="radio-answer1" class="flex items-center cursor-pointer">--}}
{{--                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                    <x-jet-input type="text" id="answer1" name="answer1" class="lg:w-1/2 w-10/12 bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform"/>--}}
{{--                                                    <div id="answerClose-2" class="fa fa-times w-2/12 ml-4 text-xl text-gray-400 hover:text-red-500 transition duration-300 ease-out transform cursor-pointer"></div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}

{{--                                        <x-jet-button class="bg-indigo-500 hover:bg-indigo-400 active:bg-indigo-500 focus:border-indigo-500" id="newAnswer1" type="button">{{ __("Add new answer") }}</x-jet-button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


                            <div id="createTestBlock" class="flex flex-wrap">
                            </div>

                            <x-jet-button class="bg-indigo-500 hover:bg-indigo-400 active:bg-indigo-500 focus:border-indigo-500" id="newBlock" type="button">{{ __("Add new question") }}</x-jet-button>






                        </div>
                    </div>
            </div>
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-gray-800 text-xl font-bold">{{ __('Save new test') }}</h6>
                    <x-jet-button class="bg-indigo-500 hover:bg-indigo-400 active:bg-indigo-500 focus:border-indigo-500">
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </div>
            </form>

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
