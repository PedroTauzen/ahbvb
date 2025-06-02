<section class="bg-white py-16 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 text-center">
        {{-- Título --}}
        <h2 class="text-3xl font-bold mb-10">Ocorrências Ativas</h2>

        {{-- Sino isolado --}}
        <div class="flex justify-center mb-12">
            <div class="flex flex-col items-center">
                <i class="las la-bell text-red-600 text-6xl mb-2"></i>
                <span class="text-5xl font-bold text-gray-800">6</span>
            </div>
        </div>

        {{-- Indicadores abaixo --}}
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-8 text-gray-800">
            {{-- Meios Materiais --}}
            <div class="flex flex-col items-center">
                <i class="las la-truck text-red-600 text-5xl mb-2"></i>
                <span class="text-2xl font-bold">5</span>
                <span class="text-sm">Meios Materiais</span>
            </div>

            {{-- Meios Humanos --}}
            <div class="flex flex-col items-center">
                <i class="las la-user-shield text-red-600 text-5xl mb-2"></i>
                <span class="text-2xl font-bold">6</span>
                <span class="text-sm">Meios Humanos</span>
            </div>

            {{-- Doentes/Vítimas --}}
            <div class="flex flex-col items-center">
                <i class="las la-users text-red-600 text-5xl mb-2"></i>
                <span class="text-2xl font-bold">0</span>
                <span class="text-sm">Doentes/Vítimas</span>
            </div>

            {{-- Km Percorridos --}}
            <div class="flex flex-col items-center">
                <i class="las la-road text-red-600 text-5xl mb-2"></i>
                <span class="text-2xl font-bold">2</span>
                <span class="text-sm">Km Percorridos</span>
            </div>
        </div>
    </div>
</section>