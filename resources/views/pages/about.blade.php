@extends('layouts.app')

@section('content')
<div class="pt-16 pb-20 lg:pt-24 lg:pb-28 bg-backgroundPrimary min-h-screen">
    <div class="container mx-auto text-center py-20">
        <div id="welcome-screen">
            <img src="/assets/jurpan.png" alt="Maskot" class="mx-auto w-32 h-32">
            <h2 class="text-2xl font-semibold mt-4">Hai, user!</h2>
            <p class="text-lg text-gray-600">Mau nanya apa?</p>
        </div>

        <div id="chat-screen" class="hidden">
            <div id="chat-box" class="border p-4 w-full max-w-lg mx-auto h-96 overflow-y-auto bg-gray-100 rounded-lg flex flex-col gap-4">
            </div>

            <div id="loading" class="hidden justify-center items-center">
                <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-purple-500"></div>
            </div>

        </div>

        <div class="flex justify-center items-center mt-4 max-w-3xl mx-auto">
            <div class="flex-1 max-w-lg relative">
                <textarea id="prompt" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:ring focus:ring-purple-200 focus:outline-none resize-none" placeholder="Tanyakan sesuatu..." rows="1" style="overflow: hidden;"></textarea>
                <button id="send" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <img src="{{ asset('assets/send.svg') }}" class="h-5 w-5" alt="Send">
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('send').addEventListener('click', async function() {
        const prompt = document.getElementById('prompt').value;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        if (prompt.trim() === '') return;

        document.getElementById('welcome-screen').classList.add('hidden');
        document.getElementById('chat-screen').classList.remove('hidden');

        const chatBox = document.getElementById('chat-box');
        chatBox.innerHTML += `<div class='text-right flex items-center justify-end'><p class='bg-purple-500 text-white p-3 rounded-lg inline-block max-w-xs break-words'>${prompt}</p></div>`;

        document.getElementById('loading').classList.remove('hidden'); // Show loading

        try {
            const response = await fetch('/generate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    prompt
                })
            });

            const data = await response.json();

            if (data.message) {
                const formattedMessage = data.message.replace(/\*\*/g, ''); // Remove **
                chatBox.innerHTML += `<div class='text-left flex items-center'><img src='/assets/jurpan.png' alt='Jurpan' class='w-8 h-8 rounded-full mr-2'><p class='bg-gray-300 p-3 rounded-lg inline-block max-w-xs break-words'>${formattedMessage}</p></div>`;
            } else {
                chatBox.innerHTML += `<div class='text-left flex items-center'><img src='/assets/jurpan.png' alt='Jurpan' class='w-8 h-8 rounded-full mr-2'><p class='bg-gray-300 p-3 rounded-lg inline-block max-w-xs break-words'>Tidak ada respon dari AI.</p></div>`;
            }
        } catch (error) {
            console.error("Error fetching data:", error);
            chatBox.innerHTML += `<div class='text-left flex items-center'><img src='/assets/jurpan.png' alt='Jurpan' class='w-8 h-8 rounded-full mr-2'><p class='bg-gray-300 p-3 rounded-lg inline-block max-w-xs break-words'>Terjadi kesalahan.</p></div>`;
        } finally {
            document.getElementById('loading').classList.add('hidden'); // Hide loading
        }


        document.getElementById('prompt').value = '';
        chatBox.scrollTop = chatBox.scrollHeight;


    });
</script>
@endsection