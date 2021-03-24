<style>
    dialog[open] {
        animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
    }

    dialog::backdrop {
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
        backdrop-filter: blur(3px);
    }


    @keyframes appear {
        from {
            opacity: 0;
            transform: translateX(-3rem);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
@php
    $i = 0;
@endphp
<div class="grid lg:grid-cols-4 xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4 ">
    @foreach($test as $testsCard)
        <div class="mx-auto max-w-xs rounded overflow-hidden shadow-md">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $testsCard->title }}</div>
                <p class="text-grey-darker text-base">
                    {{ $testsCard->desc }}
                </p>
            </div>
            <div class="px-6 py-4">


                <x-jet-button onclick="document.getElementById('myModal{{$i}}').showModal()" id="btn">Пройти тест!</x-jet-button>
            </div>
        </div>


        <dialog id="myModal{{$i}}" class=" w-11/12 md:w-1/2 p-5  bg-white rounded-md ">

            <div class="flex flex-col w-full h-auto ">
                <!-- Header -->
                <div class="flex w-full h-auto justify-center items-center">
                    <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                        Внимание!
                    </div>
                    <div onclick="document.getElementById('myModal{{$i}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                    <!--Header End-->
                </div>

                <!-- Modal Content-->
                <div class="flex flex-col w-full h-auto py-5 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                    На вопросы отведено определенное количество времени. Если по его истечении тест не будет отправлен - он автоматически закроется.

                    <div class="mx-auto pt-5">
                        <a href="{{ route('test.show', ['test' => $testsCard->id, 'language' => 'ru']) }}"><x-jet-button>Начать</x-jet-button></a>


                    </div>
                </div>
                <!-- End of Modal Content-->

            </div>
        </dialog>
        @php($i++)
    @endforeach

</div>


