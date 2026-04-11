<div>
    <h1>hello</h1>


    </pre>
    <table border="2">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>created_at</td>
            <td>password</td>

            @foreach($user as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name  }}</td>
            <td>{{ $data-> email }}</td>
            <td>{{ $data->created_at}}</td>
            <td>{{ $data->password }}</td>
        </tr>
        @endforeach
    </table>



</div>