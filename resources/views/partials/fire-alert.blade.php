<section class="bg-gradient-to-r from-red-800 to-red-600 py-6 text-center text-white mt-16">
    <div class="max-w-4xl mx-auto px-4">
        <button onclick="toggleFireModal(true)" class="block w-full">
            <h3 class="text-xl font-bold uppercase">Perigo de Incêndio Rural</h3>
            <p class="text-sm mt-1">Clique para saber o índice previsto no concelho</p>
        </button>
    </div>

    {{-- Modal --}}
    <div id="fire-modal" class="fixed inset-0 bg-black bg-opacity-70 hidden z-50 flex items-center justify-center">
        <div class="bg-white w-full max-w-6xl mx-auto rounded-lg shadow-lg overflow-hidden relative">
            {{-- Botão fechar --}}
            <button onclick="toggleFireModal(false)" class="absolute top-2 right-4 text-red-600 text-2xl z-50">
                <i class="las la-times"></i>
            </button>

            {{-- Conteúdo iframe --}}
            <div class="aspect-video">
                <iframe src="https://www.ipma.pt/pt/riscos/incendio/" width="100%" height="100%" class="w-full h-[80vh] border-0"></iframe>
            </div>
        </div>
    </div>

    {{-- Script para alternar modal --}}
    <script>
        function toggleFireModal(show) {
            const modal = document.getElementById('fire-modal');
            if (show) {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            } else {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }
    </script>
</section>