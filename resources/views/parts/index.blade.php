<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Everard task</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
        
    </head>

    <body class="antialiased">
        <div id="app"></div>
        <table>
            <tr>
                <td>ID</td>
                <td>Part number</td>
                <td>Part description</td>
                <td>Stock quantity</td>
                <td>Created at</td>
                <td>Updated at</td>
            </tr>
            @foreach ($parts as $part)
                <tr>
                    <td>{{ $part->id }}</td>
                    <td>{{ $part->part_number }}</td>
                    <td>{{ $part->part_description }}</td>
                    <td>{{ $part->stock_quantity }}</td>
                    <td>{{ $part->created_at }}</td>
                    <td>{{ $part->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </body>

</html>