
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
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0">


                <form action="{{ route('group.update', ['language' => 'ru', 'group' => $group->id]) }}" method="post">
                    @method('PUT')
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-gray-800 text-xl font-bold">{{ __('Edited') }}</h6>
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
                            {{ __('Group edit') }}
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-jet-label for="name" value="{{ __('Name group') }}" />
                                    <x-jet-input id="name" name="name" type="text" class="w-full transition-all duration-150" value="{{ old('name', $group->name) }}"/>
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <div class="relative w-full mb-3">
                                    <x-jet-label for="description" value="{{ __('Description group') }}" />
                                    <textarea type="text" name="description" id="description"  class="form-textarea mt-1 block w-full rounded-md shadow-sm transition duration-300 ease-out transform border-gray-300" rows="3">{{ old('description', $group->desc) }}</textarea>


                                </div>
                            </div>
                        </div>
                    </div>
                </form>

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
