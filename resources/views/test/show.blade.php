@php
    use App\Models\Question;
@endphp

<x-app-layout xmlns:livewire="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @foreach($testCollect as $testName)
                {{ $testName->title }}
            @endforeach
        </h2>
    </x-slot>

    <form id="test" action="{{ route('test.store', app()->getLocale()) }}" method="POST">
        @csrf
        <input type="hidden" name="testid" value="{{$testCollect[0]->id}}">
        @foreach($testQues as $test)
            <x-test.main-bg>

                <h4 class="font-semibold mb-4 p-4 rounded-md bg-indigo-50 w-auto text-lg text-gray-800 leading-tight">
                    {{ $test->title }}
                </h4>

                @php
                    $answer = Question::find($test->id);
                    $answers = $answer->answer;
                    $name++;
                @endphp

                @foreach($answers as $answerItem)
                    <?php $i++ ?>
                    <div class="flex items-center mr-4 mb-4">
                        <input required id="radio{{ $i }}" value="{{ $answerItem->id }}" type="radio"
                               name="radio{{ $name }}" class="hidden"/>
                        <label for="radio{{ $i }}" class="flex items-center cursor-pointer">
                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                            {{ $answerItem->title }}
                        </label>
                    </div>
                @endforeach

            </x-test.main-bg>
        @endforeach

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-jet-button>Отправить ответы</x-jet-button>
            </div>
        </div>
    </form>

    <div id="timer" class="fixed top-20 right-0 text-lg bg-indigo-100 p-2 rounded-l-lg shadow-sm font-medium"></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
    <script>

        var limit = {{ $testCollect[0]->timer }}; //
        function processTimer() {
            if (limit > 0) {
                limit--;
            } else {
                {{--location.href = "{{ route('test.edit', 1) }}"--}}
                $("#test").submit();
            }
            var limit_div = parseInt(limit / 60); // минуты
            var limit_mod = limit - limit_div * 60; // секунды
            // строка с оставшимся временем
            limit_str = "&nbsp;&nbsp;";
            if (limit_div < 10) limit_str = limit_str + "0";
            limit_str = limit_str + limit_div + ":";
            if (limit_mod < 10) limit_str = limit_str + "0";
            limit_str = limit_str + limit_mod + "&nbsp;&nbsp;";
            // вывод времени
            el_timer = document.getElementById("timer");
            if (el_timer) el_timer.innerHTML = limit_str;
            setTimeout("processTimer()", 1000);
        }
        setTimeout("processTimer()", 1000);

    </script>

</x-app-layout>
