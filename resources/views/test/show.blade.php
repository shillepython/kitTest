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

    <form action="{{ route('test.store') }}" method="post">
        @csrf
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


</x-app-layout>
