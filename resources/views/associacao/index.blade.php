@extends('layouts.guest')

@section('page-title')
<section class="bg-gray-300 py-12 text-center">
    <h1 class="text-2xl md:text-4xl font-bold text-gray-800">
        Associação Humanitária de Bombeiros Voluntários de Beja
    </h1>
</section>
@endsection

@section('content')
<section id="historia" class="max-w-4xl mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold mb-6">História</h1>
    <p>
        Fundada com o propósito de servir a comunidade de Beja, a Associação Humanitária dos Bombeiros Voluntários tem desempenhado um papel vital ao longo dos anos no combate a incêndios, apoio a vítimas e formação cívica.
    </p>
</section>

<section id="estatutos" class="max-w-4xl mx-auto px-4 py-16 bg-gray-50">
    <h1 class="text-3xl font-bold mb-6">Estatutos</h1>
    <p>Consulte os nossos estatutos através do link abaixo:</p>
    <a href="/documentos/estatutos.pdf" target="_blank" class="text-red-600 underline mt-4 inline-block">
        Estatutos da AHBVB (PDF)
    </a>
</section>

<section id="orgaos" class="max-w-4xl mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold mb-6">Órgãos Sociais</h1>
    <ul class="list-disc pl-5 space-y-2">
        <li><strong>Direção:</strong> João Exemplo (Presidente), Ana Apoio (Secretária), ...</li>
        <li><strong>Assembleia Geral:</strong> Manuel Silva (Presidente), ...</li>
        <li><strong>Conselho Fiscal:</strong> Carla Sousa (Presidente), ...</li>
    </ul>
</section>

<section id="documentos" class="max-w-4xl mx-auto px-4 py-16 bg-gray-50">
    <h1 class="text-3xl font-bold mb-6">Documentos</h1>
    <ul class="space-y-2">
        <li><a href="/documentos/relatorio2023.pdf" target="_blank" class="text-red-600 underline">Relatório de Atividades 2023</a></li>
        <li><a href="/documentos/contas2023.pdf" target="_blank" class="text-red-600 underline">Contas 2023</a></li>
    </ul>
</section>
@endsection