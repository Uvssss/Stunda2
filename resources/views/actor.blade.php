@extends('layout/wrapper')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th> First Name</th>
        <th>Last Name</th>
        <th>Last update</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($actors as $actor)
        <tr onclick="actor({{$actor->actor_id}})">
            <td>{{$actor->actor_id}}</td>
            <td>{{$actor->first_name}}</td>
            <td>{{$actor->last_name}}</td>
            <td>{{$actor->last_update}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    function actor(id){
        window.location="http://localhost:8000/actor/"+id;
    }
</script>
@endsection
