<footer class="bg-gray-100 text-gray-800 py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">
        {{-- Logo e redes sociais --}}
        <div class="flex flex-col items-center md:items-start">
            <img src="/storage/imagens/logo_bvb.png" alt="Logo" class="h-16 mb-4">
            <div class="flex gap-4 text-2xl mt-2">
                <a href="#"><i class="lab la-facebook-f text-blue-600"></i></a>
                <a href="#"><i class="lab la-twitter text-sky-500"></i></a>
                <a href="#"><i class="lab la-instagram text-pink-500"></i></a>
                <a href="#"><i class="lab la-youtube text-red-600"></i></a>
            </div>
        </div>

        {{-- Links --}}
        <div>
            <h3 class="font-bold mb-3">Links</h3>
            <ul class="space-y-2">
                <li><a href="/" class="hover:underline">Início</a></li>
                <li><a href="#" class="hover:underline">Associação</a></li>
                <li><a href="#" class="hover:underline">Bombeiros</a></li>
                <li><a href="#" class="hover:underline">Serviços</a></li>
                <li><a href="#" class="hover:underline">Comunicação</a></li>
                <li><a href="#" class="hover:underline">Documentos</a></li>
                <li><a href="#" class="hover:underline">Contactos</a></li>
            </ul>
        </div>

        {{-- Faça Parte --}}
        <div>
            <h3 class="font-bold mb-3">Faça Parte</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline">Seja Sócio</a></li>
                <li><a href="#" class="hover:underline">Seja Bombeiro</a></li>
                <li><a href="#" class="hover:underline">Doe</a></li>
            </ul>
        </div>

        {{-- Contacto + formulário --}}
        <div>
            <p class="mb-4">
                Associação Humanitária dos Bombeiros Voluntários de Beja<br>
                Rua Exemplo nº 123, 7800-000 Beja · NIF: 123456789
            </p>
            <form>
                <div class="flex rounded overflow-hidden">
                    <input type="text" placeholder="Escrever mensagem..." class="w-full px-4 py-2 bg-zinc-200 text-sm">
                    <button type="submit" class="bg-red-700 px-4 text-white">
                        <i class="las la-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center text-xs text-gray-500 mt-10">
        © {{ date('Y') }} Bombeiros Voluntários de Beja. Todos os direitos reservados.
        · <a href="/login" class="hover:underline">Backoffice</a>
    </div>
</footer>