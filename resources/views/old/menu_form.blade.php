<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <form method="POST" action="{{ route('insertMenu') }}">
                {{ csrf_field() }}
            <select name="category">
                <option value="category" disabled selected>Category</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
            </select><br>
        
        <input type="text" name='item' placeholder="name of item" /><br>

        <input type="number" name='price' placeholder="price of item" /><br>

        <button type="submit">submit</button>
    </form>

    <h1>Menu</h1>
    <table>
        <thead>
            <tr>
                <th> item </th>
                <th> category </th>
                <th> price </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
        
    </body>
</html>
