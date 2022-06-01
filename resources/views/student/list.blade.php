@extends('layouts.main')
@section('content')
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Dob</th>
    </tr>
    @foreach($students as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td><a href="{{route('student.details',['id'=>$st->id])}}">{{$st->name}}</a></td>
            <td>{{$st->dob}}</td>
        </tr>
    @endforeach
</table>
@endsection