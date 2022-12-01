@push('css')
    <style>
        .drag {
            width: fit-content;
            height: auto;
            margin: 5px;
            padding: 10px;
            background-color: rgb(252, 110, 67);
            color: white;
            cursor: move;
        }

        .ui-draggable-dragging {
            z-index: 9999;
        }

        .pricing-table .table tbody tr td {
            overflow-x: unset;
        }
    </style>
@endpush
<section class="pricing-area pt-100">
    <div class="container">
        <h3>{{ $quiz->subtitle }}</h3>
        <div class="options row pt-10 pb-10">
            @foreach ($options as $option)
                <div data-id="{{ $option->id }}" class="drag" draggable="true" style="">
                    {{ $option->answer }}
                </div>
            @endforeach
        </div>
        <div class="pricing-table pb-70 pt-70">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th style="width: 50%">
                            السؤال
                        </th>
                        <th>
                            الإجابة
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($quiz->questions as $question)
                        <tr>
                            <td style="width: 50%;overflow-x:unset">
                                @if ($quiz->type == 'photo')
                                    <img src="{{ asset('img/questions/' . $question->id . '/' . $question->image_url) }}"
                                        alt="image-question" style="width: 100px;height:100px">
                                @else
                                    {{ $question->question }}
                                @endif
                            </td>
                            <td class="answer">

                            </td>
                        </tr>
                    @endforeach
                    @auth('kid')
                        <tr>
                            <td colspan="2">
                                <span class="text-danger error"></span>
                                <button class="check-answer d-block default-btn mx-auto my-2">عرض النتيجة</button>
                            </td>
                        </tr>
                    @endauth
                </tbody>
            </table>

        </div>
    </div>
</section>

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            // Enable drag and drop...
            var quiz = {!! json_encode($quiz) !!};

            function dragAndDrop(dragTarget, dropTarget) {
                // Enable draggable events...
                $(dragTarget).draggable({
                    revert: true
                });

                // Enable the droppable events...
                $(dropTarget).droppable({
                    drop: function(event, ui) {

                        for (var i = 0; i < $(this).children().length; i++) {
                            $('.options')[0].append($(this).children()[i])
                        }

                        // Append the dropped item into its drop target...
                        $(this).append(ui.draggable);
                        // Place the drag target in the normal document flow...
                        ui.draggable.css({
                            position: "static",
                            top: "auto",
                            left: "auto"
                        });
                        // jQuery UI requires the draggable element to have position: relative...
                        ui.draggable.css({
                            position: "relative"
                        });
                    }
                });
            }
            // Enable drag and drop in both directions...
            dragAndDrop(".drag", ".answer");
            dragAndDrop(".drag", ".options");



            $(".check-answer").on("click", function() {

                // Check the guess against each answer in the answers array, and increment the score if they match...
                var length = 0;
                var score = 0;
                $(".answer").each(function(i) {
                    var answer = $(this).find("div");
                    if (answer.text() != "") {
                        if (answer.attr('data-id') == quiz.questions[length].id) {
                            score += quiz.question_point;
                        }
                        length++;
                    }
                });
                console.log(length)
                if (length != quiz.questions.length) {
                    $('.error').text('لابد من اكمال الاختبار وحل جميع الاسئلة');
                } else {
                    $('.error').text('');
                    window.location.replace("{{ route('kid.quiz_result') }}?score=" + score +
                        "&id=" + quiz.id);
                }

            });
        });
    </script>
@endpush
