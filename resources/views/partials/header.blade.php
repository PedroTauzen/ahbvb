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
                    <li><a href="/associacao#missao-valores" class="block px-4 py-2 text-sm hover:bg-red-50">Missão, Visão e Valores</a></li>
                    <li><a href="/associacao#protocolos" class="block px-4 py-2 text-sm hover:bg-red-50">Parcerias e Protocolos</a></li>
                    <li><a href="/associacao#ser-socio" class="block px-4 py-2 text-sm hover:bg-red-50">Ser Sócio</a></li>
                    <li><a href="/associacao#orgaos-sociais" class="block px-4 py-2 text-sm hover:bg-red-50">Órgãos Sociais</a></li>
                    <li><a href="/associacao#documentos" class="block px-4 py-2 text-sm hover:bg-red-50">Documentos</a></li>
                </ul>
            </li>

            <li class="relative group">
                <a href="/bombeiros" class="{{ request()->is('bombeiros') ? 'text-red-600 font-bold border-b-2 border-red-600' : 'hover:text-red-600' }}">Bombeiros</a>
                <ul class="absolute hidden group-hover:block bg-white text-left shadow-lg py-2 rounded w-60 z-50">
                    <li><a href="/bombeiros#corpo" class="block px-4 py-2 text-sm hover:bg-red-50">Corpo de Bombeiros</a></li>
                    <li><a href="/bombeiros#quadro" class="block px-4 py-2 text-sm hover:bg-red-50">Quadro do Pessoal</a></li>
                    <li><a href="/bombeiros#recrutamento" class="block px-4 py-2 text-sm hover:bg-red-50">Recrutamento</a></li>
                    <li><a href="/bombeiros#formacao" class="block px-4 py-2 text-sm hover:bg-red-50">Formação e Certificação</a></li>
                    <li><a href="/bombeiros#instalacoes" class="block px-4 py-2 text-sm hover:bg-red-50">Instalações e Frotas</a></li>
                    <li><a href="/bombeiros#estatisticas" class="block px-4 py-2 text-sm hover:bg-red-50">Estatísticas</a></li>
                    <li><a href="/bombeiros#documentos" class="block px-4 py-2 text-sm hover:bg-red-50">Documentos</a></li>
                </ul>
            </li>

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
            <li><a href="/" class="{{ request()->is('/') ? 'text-red-600 font-bold' : 'hover:text-red-600' }}">Início</a></li>

            {{-- Associação com submenus --}}
            <li>
                <span class="font-semibold text-red-600">Associação</span>
                <ul class="ml-4 mt-2 space-y-1 text-sm text-gray-700">
                    <li><a href="/associacao#sobre" class="block hover:text-red-600">Sobre a Associação</a></li>
                    <li><a href="/associacao#historia" class="block hover:text-red-600">História</a></li>
                    <li><a href="/associacao#missao-valores" class="block hover:text-red-600">Missão, Visão e Valores</a></li>
                    <li><a href="/associacao#protocolos" class="block hover:text-red-600">Parcerias e Protocolos</a></li>
                    <li><a href="/associacao#ser-socio" class="block hover:text-red-600">Ser Sócio</a></li>
                    <li><a href="/associacao#orgaos-sociais" class="block hover:text-red-600">Órgãos Sociais</a></li>
                    <li><a href="/associacao#documentos" class="block hover:text-red-600">Documentos</a></li>
                </ul>
            </li>

            <li><a href="/bombeiros" class="hover:text-red-600">Bombeiros</a></li>
            <ul class="ml-4 text-sm space-y-1">
                <li><a href="/bombeiros#corpo" class="hover:text-red-600">Corpo de Bombeiros</a></li>
                <li><a href="/bombeiros#quadro" class="hover:text-red-600">Quadro do Pessoal</a></li>
                <li><a href="/bombeiros#recrutamento" class="hover:text-red-600">Recrutamento</a></li>
                <li><a href="/bombeiros#formacao" class="hover:text-red-600">Formação</a></li>
                <li><a href="/bombeiros#instalacoes" class="hover:text-red-600">Instalações</a></li>
                <li><a href="/bombeiros#estatisticas" class="hover:text-red-600">Estatísticas</a></li>
                <li><a href="/bombeiros#documentos" class="hover:text-red-600">Documentos</a></li>
            </ul>

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