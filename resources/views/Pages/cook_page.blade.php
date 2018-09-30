<table>
    <thead>
        <tr>
            <th> item </th>
            <th> quantity </th>
            <th> table </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->item }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->table_id }}</td>
                <form method="POST" action="{{ route('complete_order') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="order_id" value={{$order->id}} />
                    <td><button type="submit">complete</button></td>
                </form>                                
            </tr>
        @endforeach        
    </tbody>
</table>