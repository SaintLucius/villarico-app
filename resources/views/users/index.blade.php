<x-layout>
    <x-slot:heading>User List</x-slot:heading>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">gender</th>
                <th scope="col">studno</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>    
                <th scope="row">{{ $user['id'] }}</th>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['gender'] }}</td>
                <td>{{ $user['studno'] }}</td>

            </tr>
            @endforeach
        </tbody>
  </tbody>
</table>

</x-layout>


