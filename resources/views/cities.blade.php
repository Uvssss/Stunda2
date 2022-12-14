@extends('layout.wrapper')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country id</th>
        <th>Last update</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cities as $city)
        <tr onclick="city({{$city->country_id}})">
            <td>{{$city->city_id}}</td>
            <td>{{$city->city}}</td>
            <td><a href="/countries/{{$city->country_id}}">{{$city->country_id}}</a></td>
            <td>{{$city->last_update}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
