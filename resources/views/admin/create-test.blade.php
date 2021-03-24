

<x-admin-layout>
    <div id="root">

        <!-- Nav Bar -->
        <x-admin.nav>
            <x-slot name="title">
                {{__('Create test')}}
            </x-slot>
        </x-admin.nav>

        <!-- Header -->
        <x-admin.header/>


        <!-- Main Content -->
        <x-admin.create-test.content/>



    </div>
    <script>
        $(function() {




            let question = {{$question}};
            let answerName = {{$answer}};
            let answerRadio = {{$answer}};
            let answerClose = {{$answer}};
            let answerIdLi = {{$answer}};


            let nameTest = $("<div/>",{
                'class': "w-full flex flex-wrap mb-5",
            }).appendTo('#createTestBlock');

            let nameTest_div_name = $("<div/>",{
                'class': "w-full lg:w-6/12 px-4",
            }).appendTo(nameTest);
            let nameTest_div_time = $("<div/>",{
                'class': "w-full lg:w-6/12 px-4",
            }).appendTo(nameTest);
            let nameTest_div_desc = $("<div/>",{
                'class': "w-full px-4",
            }).appendTo(nameTest);

            let nameTest_div_name_reletive = $("<div/>",{
                'class': "relative w-full mb-3",
            }).appendTo(nameTest_div_name);
            let nameTest_div_time_reletive = $("<div/>",{
                'class': "relative w-full mb-3",
            }).appendTo(nameTest_div_time);


            $("<label/>",{
                html: '{{__('Name test')}}',
                'class': 'block font-medium text-sm text-gray-700',
                for: 'name_test'
            }).appendTo(nameTest_div_name_reletive);

            $("<input/>",{
                'class': 'w-full bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform',
                type: 'text',
                name: 'name_test',
                id: 'name_test'
            }).appendTo(nameTest_div_name_reletive);



            $("<label/>",{
                html: '{{__('Time to test (sec)')}}',
                'class': 'block font-medium text-sm text-gray-700',
                for: 'time'
            }).appendTo(nameTest_div_time_reletive);

            $("<input/>",{
                'class': 'w-full bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform',
                type: 'text',
                name: 'time',
                id: 'time'
            }).appendTo(nameTest_div_time_reletive);


            let textarea_block = $("<label/>",{
                'class': 'block',
            }).appendTo(nameTest_div_desc);
            $("<span/>",{
                html: '{{__('Description test')}}',
                'class': 'block font-medium text-sm text-gray-700',
            }).appendTo(textarea_block);
            $("<textarea/>",{
                'class': 'form-textarea mt-1 block w-full rounded-md shadow-sm transition duration-300 ease-out transform border-gray-300',
                rows: '3',
                placeholder: '{{ __('Enter some long form description.') }}',
                name: 'desc',
                id: 'desc'
            }).appendTo(textarea_block);

            $('#newBlock').click(function () {



                let div = $("<div/>",{
                    'class': "w-full shadow mx-auto bg-white rounded-md mb-5",
                }).appendTo('#createTestBlock');
                let div2 = $("<div/>",{
                    'class': "w-full p-8",
                }).appendTo(div);

                $("<label/>",{
                    html: '{{__('Text question')}}',
                    'class': 'block font-medium text-sm text-gray-700',
                    for: 'question'+question
                }).appendTo(div2);

                $("<input/>",{
                    'class': 'w-full bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform',
                    type: 'text',
                    name: 'question'+question,
                    id: 'question'+question
                }).appendTo(div2);



                let section_border = $("<div/>",{
                    'class': "block",
                }).appendTo(div2);
                let section_border1 = $("<div/>",{
                    'class': "py-4",
                }).appendTo(section_border);
                $("<div/>",{
                    'class': "border-t border-gray-200",
                }).appendTo(section_border1);



                let div3 = $("<div/>",{
                    'class': "lg:pl-12 answerNext",
                }).appendTo(div2);




                $("<input/>",{
                    'class': 'idquestion lg:w-1/2 w-10/12 bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform',
                    type: 'hidden',
                    name: 'idquestion'+question,
                    id: 'idquestion'+question
                }).appendTo(div3);
                //
                // // let iqQuestionStart = $('#newAnswer-'+answerName).siblings(".idquestion");
                // //
                // // console.log(iqQuestionStart);
                // $("<label/>",{
                //     html: "<span class=\"w-4 h-4 inline-block mr-1 rounded-full border border-grey\"></span>",
                //     'class': 'flex items-center cursor-pointer',
                //     for: 'radio-answer'+answerRadio
                // }).appendTo(li_div_radio);
                //
                // $("<input/>",{
                //     'class': 'lg:w-1/2 w-10/12 bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform',
                //     type: 'text',
                //     name: 'answer'+answerRadio+''+answerName,
                //     id: 'answer'+answerRadio
                // }).appendTo(li_div);
                //
                //
                // let close_div = $("<div/>",{
                //     'class': 'close_point fa fa-times w-2/12 ml-4 text-xl text-gray-400 hover:text-red-500 transition duration-300 ease-out transform cursor-pointer',
                //     id: 'answerClose-'+answerClose,
                // }).appendTo(li_div);
                //
                // $('body').on('click','#answerClose-'+answerClose, function(){ // на элементы с классом .btn-del вешается обработчик
                //     $(this).closest('li').remove(); // который находит ближаейший родительский tr и удаляет.
                //     answerName--;
                // })
                //
                // console.log(close_div)









                $('body').on('click','#newAnswer-'+answerName, function(e){ // на элементы с классом .btn-del вешается обработчик


                    let ul = $("<ul/>").appendTo(div3);


                    let nameAnswer = e.target.id.substr(-1);
                    let iqQuestion = $(this).siblings(".idquestion").attr('id').substr(-1);
                    // console.log(iqQuestion);
                    // console.log(nameAnswer);




                    let li = $("<li/>",{
                        'class': "mb-4",
                        id: 'li-answer' + answerIdLi
                    }).appendTo(ul);

                    $("<label/>",{
                        html: '{{__('Text answer')}}',
                        'class': 'block font-medium text-sm text-gray-700',
                        for: 'answer'+answerRadio
                    }).appendTo(li);

                    let li_div = $("<div/>",{
                        'class': "flex flex-wrap items-center",
                    }).appendTo(li);
                    let li_div_radio = $("<div/>",{
                        'class': "flex items-center mr-4 mb-4 pt-4",
                    }).appendTo(li_div);
                    let input_radio = $("<input/>",{
                        'class': 'hidden',
                        type: 'radio',
                        'value': "answer"+answerName+''+iqQuestion,
                        name: 'radio-answer'+nameAnswer+''+iqQuestion,
                        id: 'radio-answer'+answerRadio
                    }).appendTo(li_div_radio);

                    $("<label/>",{
                        html: "<span class=\"w-4 h-4 inline-block mr-1 rounded-full border border-grey\"></span>",
                        'class': 'flex items-center cursor-pointer',
                        for: 'radio-answer'+answerRadio
                    }).appendTo(li_div_radio);

                    $("<input/>",{
                        'class': 'lg:w-1/2 w-10/12 bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm transition duration-300 ease-out transform',
                        type: 'text',
                        name: 'answer'+answerName+''+iqQuestion,
                        id: 'answer'+answerRadio
                    }).appendTo(li_div);




                    let close_div = $("<div/>",{
                        'class': 'close_point fa fa-times w-2/12 ml-4 text-xl text-gray-400 hover:text-red-500 transition duration-300 ease-out transform cursor-pointer',
                        id: 'answerClose-'+answerClose,
                    }).appendTo(li_div);

                    $('body').on('click','#answerClose-'+answerClose, function(){ // на элементы с классом .btn-del вешается обработчик
                        $(this).closest('li').remove(); // который находит ближаейший родительский li и удаляет.ц
                        console.log(answerName);
                    })
                    answerRadio++;
                    answerClose++;
                    answerIdLi++;
                    answerName++;
                })

                let newAnswer = $("<button/>",{
                    html: '{{ __("Add new answer") }}',
                    'class': 'inline-flex items-center bg-indigo-500 hover:bg-indigo-400 active:bg-indigo-500 focus:border-indigo-500 px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest disabled:opacity-25 transition ease-in-out duration-150',
                    id: 'newAnswer-'+answerName,
                    type: 'button',
                }).appendTo(div3);

                question++;

            });

        });
    </script>
</x-admin-layout>



