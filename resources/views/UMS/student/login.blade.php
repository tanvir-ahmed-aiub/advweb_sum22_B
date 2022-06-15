<h5>{{Session::get('msg')}}</h5>
@if(Session::has('logged'))
<h3>Already Logged in </h3>
@endif
<form action="" method="post">
    {{@csrf_field()}}
    <input type="text" name="uname" placeholder="Username"><br>
    @error('uname')
     {{$message}} <br>
    @enderror
    <input type="password" name="pass" placeholder="Password"></br>
    <input type="submit" value="Login">
</form>