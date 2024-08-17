<x-app-layout>
    <x-slot name="header">
        <h3>HEADER</h3>
    </x-slot>
     {{-- Tirando para passar para o controller --}}
     <!-- This is a comment
     <ol>
        {{-- Troco o Auth classe pela função --}}
        {{-- <li>Nome: {{ auth()->user()->name }}</li> --}}
        {{-- Consigo chamar via relacionamento os dados do client --}}
        {{-- <li>Documento: {{ auth()->user()->client->document }}</li> --}}
        {{-- Consulto a colection de assinaturas e chamo a primeira trazendo o name do enum --}}
        {{-- <li>Status da assinatura: {{ auth()->user()->client->signatures->first()->status->name }}</li> --}}
       </ol>
       <br>
       <ol>
        {{-- Outra forma de buscar os dados, mas via namespace --}}
        {{-- <li>Documento: {{ App\Models\Client::where('user_id', auth()->user()->id)->first()->document }}</li> --}}
       </ol>  -->

    <ol>
        <li>Nome: {{ $name }}</li>
        <li>Documento: {{ $document }}</li>
        <li>Status da assinatura: {{ $status }}</li>
        <li>Camisa: {{ $params }}</li>
    </ol>
       
</x-app-layout>