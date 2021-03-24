<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Оценка') }}
        </h2>
    </x-slot>

    <x-main>
        @if(isset($noMarks))
            <x-test.main-bg>
                {{ $noMarks }}
            </x-test.main-bg>
        @else
        <div class="flex flex-wrap" id="tabs-id">
            <div class="w-full">
                <ul class="flex mx-auto list-none flex-wrap pt-3 pb-4 flex-row mx-auto">
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-indigo-400" onclick="changeAtiveTab(event,'tab-all-tests')">
                            <i class="fas fa-space-shuttle text-base mr-1"></i> Пройденные
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-indigo-500 bg-white" onclick="changeAtiveTab(event,'tab-table-marks')">
                            <i class="fas fa-cog text-base mr-1"></i>  Оценки
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-indigo-500 bg-white" onclick="changeAtiveTab(event,'tab-table-not-passed')">
                            <i class="fas fa-briefcase text-base mr-1"></i>  Не пройденные
                        </a>
                    </li>
                </ul>
                <div class="relative flex flex-col min-w-0 break-words w-full">
                    <div class=" flex-auto">
                        <div class="tab-content tab-space">
                            <div class="block" id="tab-all-tests">

                                    <div class="container my-12 mx-auto px-4 md:px-12">
                                        <div class="flex flex-wrap -mx-1 lg:-mx-4">
                                            @foreach($tests as $test)
                                                @foreach($test as $testItem)
                                                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                                        <article class="overflow-hidden rounded-lg shadow-lg">
                                                            <a href="{{ route('test.show', ['test' => $testItem->id, 'language' => 'ru']) }}">
                                                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                                                            </a>
                                                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                                                <h1 class="text-lg">
                                                                    <a class="no-underline hover:underline text-black" href="{{ route('test.show', ['test' => $testItem->id, 'language' => 'ru']) }}">
                                                                        {{ $testItem->title }}
                                                                    </a>
                                                                </h1>
                                                                <p class="text-grey-darker text-md">
                                                                    @foreach($testItem->mark->reverse()->take(1) as $dataMarks)
                                                                        Пройден: {{ $dataMarks->created_at->format('d M / Y') }}
                                                                    @endforeach
                                                                </p>
                                                            </header>
                                                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                                                <a class="flex items-center text-black mx-auto">

                                                                    <p class="text-lg">Последняя оценка: </p>
                                                                    <p class="pl-2 text-lg font-semibold">

                                                                        @foreach($testItem->user->reverse()->take(1) as $mark)
                                                                            {{ $mark->mark }}
                                                                        @endforeach
                                                                    </p>
                                                                </a>
                                                            </footer>
                                                        </article>
                                                    </div>
                                                @endforeach
                                            @endforeach

                                        </div>
                                    </div>

                            </div>
                            <div class="hidden" id="tab-table-marks">



                                <!-- component -->
                                <div class="bg-white pb-4 px-4 rounded-md w-full">
                                    <div class="flex justify-between w-full pt-6 ">
                                        <p class="ml-3"> Users Table</p>
                                        <svg width="14" height="4" viewBox="0 0 14 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.4">
                                                <circle cx="2.19796" cy="1.80139" r="1.38611" fill="#222222"/>
                                                <circle cx="11.9013" cy="1.80115" r="1.38611" fill="#222222"/>
                                                <circle cx="7.04991" cy="1.80115" r="1.38611" fill="#222222"/>
                                            </g>
                                        </svg>

                                    </div>
                                    <div class="w-full flex justify-end px-2 mt-2">
                                        <div class="w-full sm:w-64 inline-block relative ">
                                            <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />

                                            <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                                                <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                                                    <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-x-auto mt-6">

                                        <table class="table-auto border-collapse w-full">
                                            <thead>
                                            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                                                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">Название теста</th>
                                                <th class="px-4 py-2 text-center" style="background-color:#f8f8f8">Оценка</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-sm font-normal text-gray-700">
                                            @foreach($tests as $test)
                                                @foreach($test as $testItem)
                                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                                        <td class="px-4 py-4">{{ $testItem->title }}</td>

                                                        <td class="px-4 py-4 flex flex-col ml-2 text-lg font-samibolt text-center">
                                                            @foreach($testItem->user->reverse()->take(10) as $mark)
                                                                {{ $mark->mark }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">

                                    </div>
                                </div>

                                <style>

                                    thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
                                    thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

                                    tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
                                    tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}


                                </style>



                            </div>
                            <div class="hidden" id="tab-table-not-passed">
                                <div class="container my-12 mx-auto px-4 md:px-12">
                                    <div class="flex flex-wrap -mx-1 lg:-mx-4">
                                        @if(!empty($testsNoPassed))
                                            @foreach($testsNoPassed as $testNoPassed)
                                                @foreach($testNoPassed as $testNoPassedItem)
                                                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                                        <article class="overflow-hidden rounded-lg shadow-lg">
                                                            <a href="{{ route('test.show', ['test' => $testNoPassedItem->id, 'language' => 'ru']) }}">
                                                                <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                                                            </a>
                                                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                                                <h2 class="text-lg">
                                                                    <a class="no-underline hover:underline text-black"
                                                                       href="{{ route('test.show', ['test' => $testNoPassedItem->id, 'language' => 'ru']) }}">
                                                                        {{ $testNoPassedItem->title }}
                                                                    </a>
                                                                </h2>
                                                                <p class="text-grey-darker text-md">
                                                                    Дата создания: {{ $testNoPassedItem->created_at->format('d M / Y') }}
                                                                </p>
                                                            </header>
                                                        </article>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        @else
                                            <div class="mx-auto">
                                                <x-test.main-bg>
                                                    <h2 class="text-lg">Вы сдали все тесты!</h2>
                                                </x-test.main-bg>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </x-main>

    <script type="text/javascript">
        function changeAtiveTab(event,tabID){
            let element = event.target;
            while(element.nodeName !== "A"){
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for(let i = 0 ; i < aElements.length; i++){
                aElements[i].classList.remove("text-white");
                aElements[i].classList.remove("bg-indigo-400");
                aElements[i].classList.add("text-indigo-500");
                aElements[i].classList.add("bg-white");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-indigo-500");
            element.classList.remove("bg-white");
            element.classList.add("text-white");
            element.classList.add("bg-indigo-400");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>
</x-app-layout>
