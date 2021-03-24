<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">

        <div class="w-full mb-12 xl:mb-0 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-gray-800">
                                Page visits
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                        <tr>
                            <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                {{ __('Test name') }}
                            </th>
                            <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                                {{ __('Groups') }}
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tests as $test)
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-no-wrap p-4 text-left underline">
                                <a href="">{{ $test->title }}</a>
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                @if(!$test->group_tests->isEmpty())
                                    @foreach($test->group_tests as $grouptest)
                                        <span class="px-3 py-1 bg-blue-300 text-sm text-black mx-1 rounded border-blue-600">{{ $grouptest->group->name }}</span>
                                    @endforeach
                                @else
                                    <span class="px-3 py-1 bg-blue-300 text-sm text-black mx-1 rounded border-blue-600">Групп нет</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-wrap justify-center min-w-0 break-words w-full mb-2 p-2">
                <x-jet-button><a href="{{ route('group.create', app()->getLocale()) }}">{{ __('Create new group') }}</a></x-jet-button>
            </div>
            <div class="relative flex flex-wrap justify-center min-w-0 break-words w-full mb-6">
                @foreach($groups as $group)
                    <div class="xl:w-1/4 md:w-1/3 sm:w-full">
                        <div class="bg-white shadow-xl rounded-lg m-2 py-2">
                            <div class="photo-wrapper p-2">
                                <img class="w-32 h-32 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                            </div>
                            <div class="p-2">
                                <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{ $group->name }}</h3>
                                <div class="text-center text-gray-500 text-xs font-semibold">
                                    <p>{{ $group->desc }}</p>
                                </div>

{{--                                <table class="text-xs my-3">--}}
{{--                                    <tbody><tr>--}}
{{--                                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>--}}
{{--                                        <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>--}}
{{--                                        <td class="px-2 py-2">+977 9955221114</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>--}}
{{--                                        <td class="px-2 py-2">john@exmaple.com</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody></table>--}}

                                <div class="text-center my-3">
                                    <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="{{ route('group.edit', ['language' => 'ru', 'group' => $group->id]) }}">Edit</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
