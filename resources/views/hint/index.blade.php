@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h1>{{ __('Pedidos') }}</h1>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ocasião</th>
                    <th scope="col">Para um(a)</th>
                    <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($gifts as $gift)
                    <tr>
                        <th scope="row">{{ $gift->created_at }}</th>
                        <td>{{ $gift->name }}</td>
                        <td>{{ $gift->title }}</td>
                        <td>
                            @switch($gift->who_is)
                                @case('M')
                                    Mulher
                                    @break
                                @case('H')
                                    Homem
                                    @break
                                @default
                                    Casal
                            @endswitch
                        </td>
                        <td><a href="{{ route('hint.create', $gift->code) }}" class="btn btn-primary">Dicas</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $gifts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection