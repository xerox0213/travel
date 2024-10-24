@extends('canvas')
@section('title', 'Vols')
@section('content')
    <form action="{{route('flights.post')}}" method="post" class="flights-form">
        @csrf
        <div>
            <label for="from">De :</label>
            <select class="flights-form__from-select" name="from" id="from">
                @foreach($cities as $city)
                    <option value="{{$city->cAirport}}">
                        {{$city->cAirport}} {{$city->cName}}  {{$city->cCountry}}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="to">Vers : </label>
            <select class="flights-form__to-select" name="to" id="to">
                @foreach($cities as $city)
                    <option value="{{$city->cAirport}}">
                        {{$city->cAirport}} {{$city->cName}}  {{$city->cCountry}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Rechercher</button>
    </form>
    <h2 class="main__title">Vols</h2>

    @if(isset($flights))
        <table class="flights-table">
            <thead class="flights-table__head">
            <tr>
                <th>Vol</th>
                <th>De</th>
                <th>Vers</th>
                <th>Heure Départ</th>
                <th>Heure Arrivée</th>
                <th>Durée du vol</th>
                <th>Miles</th>
            </tr>
            </thead>

            <tbody class="flights-table__body">
            @foreach($flights as $flight)
                <tr>
                    <td>{{$flight->fFlight}}</td>
                    <td>{{$flight->fFromAirport}}</td>
                    <td>{{$flight->fToAirport}}</td>
                    <td>{{$flight->fDepartTime}}</td>
                    <td>{{$flight->fArriveTime}}</td>
                    <td>{{$flight->fFlyingTime}}</td>
                    <td>{{$flight->fMiles}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection

@section('script')
    <script src="{{asset('js/app.js')}}"></script>
@endsection
