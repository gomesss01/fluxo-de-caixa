@extends('layouts.base')
@section('content')
<h1>
    <i class="bi bi-list-check"></i>
    Centro de Custo: {!!  $centro->centro_custo  !!}
</h1>
<h2>
    Listas de Lancamentos -
    {{ $centro->lancamentos()->count() }}
     itens
</h2><hr>

<p >
    Total Entradas: R$
    {{ $centro->lancamentos()->where('id_tipo',1)->sum('valor')}}
    <br>
    Total Saida: R$ -
    {{ $centro->lancamentos()->where('id_tipo',2)->sum('valor')}}
    <br>
    Saldo R$
    {{$centro->lancamentos()->where('id_tipo',1)->sum('valor')
        -
     $centro->lancamentos()->where('id_tipo',2)->sum('valor')
}}
</p><hr>

<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <caption>Listas de Lancamentos - {{ $centro->lancamentos()->count() }}</caption>
            <tr>
                <th class="col-md-1">#</th>
                <th class="col-md-1">ID</th>
                <th>Tipo</th>
                <th>Usuario</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($centro->lancamentos()->get() as $lancamento)
            
            <tr @if ($lancamento->id_tipo == 2)
                    class ="table-danger"
                @endif>
        
                <td scope="row">{{ $loop->iteration }}</td>
                <td scope="row">{{ $lancamento->id_lancamento }}</td>
                <td>{{ $lancamento->tipo->tipo }}</td>
                <td>{{ $lancamento->usuario->name}}</td>
                <td>{{ $lancamento->descricao }}</td>
                <td>{{ $lancamento->valor }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        p{
            font-weight: bolder
        }
    </style>
@endsection
@section('scripts')
@parent

@endsection
