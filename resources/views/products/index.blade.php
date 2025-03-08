<!DOCTYPE html>
<html>
<body>
    <p>PRODUCTS</p>
    <table>
        <thead>
            <tr>
                @foreach (['Id', 'Name', 'Category'] as $column)
                    <td>{{$column}}</td>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>TASKS</p>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

    <p>GLOBAL VARIABLES</p>
    <p>{{ $sharedVariable }}</p>

    <p>Product Key: {{ $productKey }}</p>
</body>
</html>