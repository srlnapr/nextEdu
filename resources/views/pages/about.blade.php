@extends('layouts.app')

@section('content')
<div class="container mx-auto text-center py-20">
    <h2 class="text-2xl font-semibold mb-4">Chatbot AI</h2>
    
    <div class="flex items-center">  <textarea id="prompt" class="border p-2 w-full max-w-lg"></textarea>
      <button id="send" class="bg-purple-500 text-white px-4 py-2 mt-2 ml-2">Kirim</button>
  </div>
    <h3 class="mt-6 text-lg font-semibold">Jawaban:</h3>
    <p id="response" class="border p-2 w-full max-w-lg"></p>
</div>

<script>
     document.getElementById('send').addEventListener('click', async function() {
        const prompt = document.getElementById('prompt').value;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const response = await fetch('/generate', {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ prompt }) 
        });

        const data = await response.json();
        console.log("Respon dari API:", data); // Debugging

        // Pastikan data sesuai format API
        if (data.message) {
            document.getElementById('response').innerText = data.message;
        } else {
            document.getElementById('response').innerText = 'Tidak ada respon dari AI.';
        }
    });
</script>
@endsection
