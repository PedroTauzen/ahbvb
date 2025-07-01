@extends('layouts.guest')

@section('page-title')
<section class="bg-gray-300 py-12 text-center">
    <h1 class="text-2xl md:text-4xl font-bold text-gray-800">
        Corpo de Bombeiros Voluntários de Beja
    </h1>
</section>
@endsection

@section('content')
<section id="corpo" class="max-w-5xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-red-700 mb-6">Corpo de Bombeiros</h2>

    <img src="/images/corpo-bombeiros.jpg" alt="Corpo de Bombeiros de Beja" class="rounded-xl shadow-md mb-6 w-full max-h-96 object-cover">

    <p class="mb-4">
        O <strong>Corpo de Bombeiros Voluntários de Beja</strong> constitui a força operacional da Associação, composto por homens e mulheres
        que diariamente dedicam o seu tempo e energia à proteção da comunidade. Com mais de 130 anos de história, esta corporação tem sido
        sinónimo de coragem, entrega e serviço público.
    </p>

    <p class="mb-4">
        A sua missão é <strong>salvar vidas, proteger bens e garantir a segurança das populações</strong> nas mais diversas situações de emergência:
        incêndios urbanos e florestais, acidentes rodoviários, inundações, transporte de doentes, entre outros.
    </p>

    <p class="mb-4">
        Atuando em todo o concelho de Beja, numa área de mais de <strong>1.100 km²</strong> e com <strong>18 freguesias</strong>, o Corpo é constituído
        por cerca de <strong>90 bombeiros voluntários</strong> e <strong>45 funcionários</strong>, muitos dos quais também operacionais.
    </p>

    <p class="mb-4">
        Sustentados pelos valores da <strong>solidariedade, resiliência, altruísmo e dedicação</strong>, os Bombeiros de Beja formam uma equipa coesa,
        sempre pronta para responder com profissionalismo e espírito de missão.
    </p>

    <p class="italic text-sm text-gray-600">
        “Vida por Vida” — mais do que um lema, um compromisso com a população.
    </p>
</section>

<section id="quadro" class="max-w-5xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-red-700 mb-10">Quadro do Pessoal</h2>

    {{-- Quadro de Comando --}}
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Quadro de Comando</h3>
    <div class="grid md:grid-cols-3 gap-8 mb-12">
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Comandante', 'foto' => 'comandante.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => '2.º Comandante', 'foto' => '2comandante.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Adjunto de Comando', 'foto' => 'adjunto.jpg'])
    </div>

    {{-- Carreira de Oficial Bombeiro --}}
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Oficiais Bombeiros</h3>
    <div class="grid md:grid-cols-4 gap-6 mb-12">
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Oficial Superior', 'foto' => 'oficial-superior.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Oficial Principal', 'foto' => 'oficial-principal.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Oficial 1.ª', 'foto' => 'oficial-1.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Oficial 2.ª', 'foto' => 'oficial-2.jpg'])
    </div>

    {{-- Carreira de Bombeiros --}}
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Bombeiros do Quadro Ativo</h3>
    <div class="grid md:grid-cols-4 gap-6 mb-12">
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Chefe', 'foto' => 'chefe.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Subchefe', 'foto' => 'subchefe.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Bombeiro 1.ª', 'foto' => 'bombeiro-1.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Bombeiro 2.ª', 'foto' => 'bombeiro-2.jpg'])
    </div>

    {{-- Cadetes e Infantes --}}
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Escola de Cadetes e Infantes</h3>
    <div class="grid md:grid-cols-3 gap-6 mb-12">
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Cadete', 'foto' => 'cadete.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Infante', 'foto' => 'infante.jpg'])
    </div>

    {{-- Quadro de Reserva e Honra --}}
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Quadros de Honra e Reserva</h3>
    <div class="grid md:grid-cols-2 gap-6">
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Comandante (Honra)', 'foto' => 'honra.jpg'])
        @include('bombeiros.partials.pessoa', ['nome' => 'Nome', 'cargo' => 'Chefe (Reserva)', 'foto' => 'reserva.jpg'])
    </div>
</section>

@endsection