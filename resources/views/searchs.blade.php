@extends('canvas')
@section('title', 'Recherches')
@section('content')
    <h2 class="main__title">Historique des recherches</h2>

    @if(count($searchs) === 0)
        <p>Aucune recherche dans l'historique</p>
    @else
        <table class="searchs-table">
            <thead class="searchs-head">
            <tr>
                <th>De</th>
                <th>Vers</th>
                <th>Créé le</th>
            </tr>
            </thead>

            <tbody class="searchs-body">
            @foreach($searchs as $search)
                <tr>
                    <td>{{$search->fromAirport}}</td>
                    <td>{{$search->toAirport}}</td>
                    <td>{{$search->createdAt}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
