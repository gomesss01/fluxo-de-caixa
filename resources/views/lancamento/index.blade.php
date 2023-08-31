@extends('layouts.base')
@section('content')
    <h1>Lançamentos</h1>
    <h2>{{Auth::user()->name}}</h2>
    <hr>

    {{-- alerts --}}
    @include('layouts.partials.alerts')
    {{-- /alerts --}}

    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>LISTA DE</caption>
                <tr>
                    <th class="col-2">#</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td scope="row" class="col-1">
                        <div class="flex-column">
                            {{-- ver --}}
                            <a class="btn btn-success" href="#">
                                <i class="bi bi-eye"></i>
                            </a>
                            {{-- editar --}}
                            <a class="btn btn-dark" href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir" data-identificacao="" data-url="">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
            </tbody>
        </table>
    </div>

    <style>
        h1{
            text-align: center;
        }
        h2{
            font-family: fantasy;
            font-size: 18px
            
        }
    </style>

{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
@endsection
@section('scripts')
@parent

@endsection
