{{-- Topo com redes sociais e contacto --}}
<div class="bg-white py-2 px-4 flex justify-between items-center text-sm border-b">
    <div class="flex gap-2 items-center text-red-600">
        <a href="#"><i class="lab la-facebook-f text-lg"></i></a>
        <a href="#"><i class="lab la-twitter text-lg"></i></a>
        <a href="#"><i class="lab la-instagram text-lg"></i></a>
    </div>
    <div class="text-red-600 font-semibold">
        <i class="las la-phone-alt mr-1"></i> +351 123 456 789
    </div>
</div>

{{-- Menu de navegação --}}
<nav class="bg-white shadow">
    <div class="max-w-screen-xl mx-auto px-4 py-3 flex items-center justify-between">

        {{-- Logotipo --}}
        <div class="flex items-center gap-4">
            <img src="/storage/imagens/logo_bvb.png" alt="Logo BVB" class="h-12 w-auto">
        </div>

        {{-- Botão mobile (hambúrguer) --}}
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-red-600 text-2xl focus:outline-none">
                <i class="las la-bars"></i>
            </button>
        </div>

        {{-- Menu principal --}}
        <ul id="menu" class="hidden lg:flex gap-6 text-sm font-medium items-center relative">

            <li>
                <a href="/"
                    class="{{ request()->is('/') ? 'text-red-600 font-bold border-b-2 border-red-600' : 'hover:text-red-600' }}">
                    Início
                </a>
            </li>

            <li class="relative group">
                <a href="/associacao#sobre"
                    class="{{ request()->is('associacao*') ? 'text-red-600 font-bold border-b-2 border-red-600' : 'hover:text-red-600' }}">
                    Associação
                </a>
                <ul class="absolute hidden group-hover:block bg-white text-left shadow-lg py-2 rounded w-56 z-50">
                    <li><a href="/associacao#sobre" class="block px-4 py-2 text-sm hover:bg-red-50">Sobre a Associação</a></li>
                    <li><a href="/associacao#historia" class="block px-4 py-2 text-sm hover:bg-red-50">História</a></li>
                    <li><a href="/associacao#caracterizacao" class="block px-4 py-2 text-sm hover:bg-red-50">Caracterização</a></li>
                    <li><a href="/associacao#atividades" class="block px-4 py-2 text-sm hover:bg-red-50">Atividades</a></li>
                    <li><a href="/associacao#instalacoes" class="block px-4 py-2 text-sm hover:bg-red-50">Instalações</a></li>
                    <li><a href="/associacao#orgaos" class="block px-4 py-2 text-sm hover:bg-red-50">Órgãos Sociais</a></li>
                    <li><a href="/associacao#documentos" class="block px-4 py-2 text-sm hover:bg-red-50">Documentos</a></li>
                </ul>
            </li>

            <li><a href="#" class="hover:text-red-600">Bombeiros</a></li>
            <li><a href="#" class="hover:text-red-600">Serviços</a></li>
            <li><a href="#" class="hover:text-red-600">Comunicação</a></li>
            <li><a href="#" class="hover:text-red-600">Documentos</a></li>
            <li><a href="#" class="hover:text-red-600">Contatos</a></li>
        </ul>

        {{-- Pesquisa --}}
        <div class="hidden lg:block relative">
            <input type="text" placeholder="Pesquisar" class="border rounded-full px-4 py-1 text-sm">
            <i class="las la-search absolute right-3 top-1.5 text-red-600"></i>
        </div>
    </div>

    {{-- Menu mobile dropdown --}}
    <div id="mobile-menu" class="lg:hidden hidden px-4 pb-4">
        <ul class="flex flex-col gap-2 text-sm font-medium">
            <li><a href="/" class="text-red-600 font-bold">Início</a></li>
            <li><a href="#" class="hover:text-red-600">Associação</a></li>
            <li><a href="#" class="hover:text-red-600">Bombeiros</a></li>
            <li><a href="#" class="hover:text-red-600">Serviços</a></li>
            <li><a href="#" class="hover:text-red-600">Comunicação</a></li>
            <li><a href="#" class="hover:text-red-600">Documentos</a></li>
            <li><a href="#" class="hover:text-red-600">Contactos</a></li>
            <li>
                <input type="text" placeholder="Pesquisar" class="border rounded-full px-4 py-1 text-sm w-full mt-2">
            </li>
        </ul>
    </div>
</nav>