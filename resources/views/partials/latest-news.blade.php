<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Últimas Notícias</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-white shadow-md hover:shadow-lg transition rounded overflow-hidden">
                <div class="bg-gray-300 h-48"></div>
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-2">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem</h3>
                    <p class="text-gray-700 text-sm mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <a href="#" class="text-red-600 text-sm font-semibold border-b-2 border-red-600 hover:underline">
                        READ MORE
                    </a>
                </div>
        </div>
        @endfor
    </div>

    <div class="text-center mt-10">
        <a href="#" class="inline-block bg-red-700 text-white font-semibold px-8 py-3 rounded hover:bg-red-800 transition">
            Ver Mais...
        </a>
    </div>
    </div>
</section>