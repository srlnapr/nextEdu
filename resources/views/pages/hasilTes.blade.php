@extends('layouts.app')

@section('content')
<section class="pt-28 pb-24 lg:pt-36 bg-white min-h-screen">
    <div class="container">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-primary">Tes Minatmu Sekarang!</h1>
            <p class="text-gray-600">Tes ini di supervisi oleh data Psikolog</p>
        </div>

        <div class="mt-6 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">Jawablah yang sesuai dengan dirimu!</h2>

            <div class="mt-4">
                <span>Progres</span>
                <div class="w-full bg-gray-300 h-4 rounded-lg overflow-hidden">
                    <div id="progress-bar" class="h-full bg-purple-500" style="width: 0%;"></div>
                </div>
            </div>

            <form id="quiz-form" class="mt-5">
              @foreach($pertanyaanList as $index => $pertanyaan)
              <div class="mt-4 p-3 border rounded-md question-block" data-id="{{ $pertanyaan['id'] }}">
                  <p class="text-gray-700">{{ $index + 1 }}. {{ $pertanyaan['pertanyaan'] }}</p>
                  <div class="flex gap-4 mt-2">
                      <button type="button" class="answer-btn px-4 py-2 border rounded-md" data-value="0">Tidak</button>
                      <button type="button" class="answer-btn px-4 py-2 border rounded-md" data-value="1">Ya</button>
                  </div>
              </div>
              @endforeach
              <button type="button" id="submitButton" class="mt-6 px-6 py-3 bg-black text-white rounded-md">Selanjutnya</button>
          </form>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.answer-btn');
        const progressBar = document.getElementById('progress-bar');
        const totalQuestions = {{ count($pertanyaanList) }};
        let answeredQuestions = 0;

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                if (!this.parentNode.dataset.answered) {
                    answeredQuestions++;
                    this.parentNode.dataset.answered = true;
                    updateProgress();
                }
                this.parentNode.querySelectorAll('.answer-btn').forEach(btn => btn.classList.remove('bg-purple-500', 'text-white'));
                this.classList.add('bg-purple-500', 'text-white');
            });
        });

        function updateProgress() {
            const percentage = (answeredQuestions / totalQuestions) * 100;
            progressBar.style.width = `${percentage}%`;
        }
    });
</script>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.answer-btn');
    const progressBar = document.getElementById('progress-bar');
    const submitButton = document.getElementById('submitButton');
    const totalQuestions = document.querySelectorAll('.question-block').length;
    const user = @json(auth()->user());
    let answeredQuestions = 0;
    let answers = [];

    // Handle answer button clicks
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const questionBlock = this.closest('.question-block');
            const questionId = questionBlock.dataset.id;
            const value = this.dataset.value;

            // Remove previous answer from array if exists
            answers = answers.filter(answer => answer.pertanyaanId !== questionId);

            // Add new answer
            answers.push({
                pertanyaanId: questionId,
                value: value
            });

            // Update button styles
            questionBlock.querySelectorAll('.answer-btn').forEach(btn => {
                btn.classList.remove('bg-purple-500', 'text-white');
            });
            this.classList.add('bg-purple-500', 'text-white');

            // Update progress if not already counted
            if (!questionBlock.dataset.answered) {
                answeredQuestions++;
                questionBlock.dataset.answered = true;
                updateProgress();
            }
        });
    });

    function updateProgress() {
        const percentage = (answeredQuestions / totalQuestions) * 100;
        progressBar.style.width = `${percentage}%`;
    }

    // Handle form submission
    submitButton.addEventListener('click', () => {
        // Check if all questions are answered
        if (answers.length < totalQuestions) {
            // Highlight unanswered questions
            document.querySelectorAll('.question-block').forEach(block => {
                const questionId = block.dataset.id;
                if (!answers.find(a => a.pertanyaanId === questionId)) {
                    block.classList.add('border-red-500', 'bg-red-50');
                }
            });
            alert('Mohon jawab semua pertanyaan terlebih dahulu!');
            return;
        }

        // Submit answers
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: `/submit-answer/${user.id}`,
            dataType: "json",
            data: {
                'data': answers
            },
            success: (response) => {
                if (response.status === 200) {
                    window.location.replace("/dashboard");
                } else {
                    alert("Gagal mengirim jawaban");
                }
            },
            error: (error) => {
                console.error('Error:', error);
                alert("Terjadi kesalahan saat mengirim jawaban");
            }
        });
    });
});
  </script>
</section>

@endsection
