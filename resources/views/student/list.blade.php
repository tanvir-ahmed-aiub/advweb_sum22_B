<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Dob</th>
    </tr>
    @foreach($students as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->name}}</td>
            <td>{{$st->dob}}</td>
        </tr>
    @endforeach
</table>