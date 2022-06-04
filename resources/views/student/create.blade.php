@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        Id: <input type="text" name="id" value="{{old('id')}}" placeholder="Id"><br>
        @error('id')
            {{$message}}<br>
        @enderror
        Gender: <input type="radio" value="male" name="gender"> Male <input type="radio" value="female" name="gender"> Female<br>
        Email: <input type="text" name="email" placeholder="Email"><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Dob: <input type="date" name="dob"><br>
        @error('dob')
            {{$message}}<br>
        @enderror
        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
        Confirm Password: <input type="password" name="conf_password"><br>
        @error('conf_password')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Create">
    </form>
@endsection