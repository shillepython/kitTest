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
            <a href="{{ route('test.show', [$testsCard->id]) }}"><x-jet-button>Пройти тест!</x-jet-button></a>
        </div>
    </div>
    @endforeach

</div>
