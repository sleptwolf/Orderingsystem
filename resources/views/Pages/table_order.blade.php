@extends('layouts.app')

@section('content')
    <div class="container">
            {{ csrf_field() }}
            <h3>Breakfast</h3>
            @foreach ($Menus as $Menu)
                @if($Menu->category == 'breakfast')
                <ul>
                    <li>
                        <button onclick="addToForm('{{ $Menu->item }}')" id="btn">{{ $Menu->item }}</button> : Rs. {{ $Menu->price }}
                    </li>
                </ul>
                @endif
            @endforeach
            <h3>Lunch</h3>
            @foreach ($Menus as $Menu)
                @if($Menu->category == 'lunch')
                <ul>
                    <li>
                        <button onclick="addToForm('{{ $Menu->item }}')" id="btn">{{ $Menu->item }}</button> : Rs. {{ $Menu->price }}
                    </li>
                </ul>
                @endif
            @endforeach
            <h3>Dinner</h3>
            @foreach ($Menus as $Menu)
                @if($Menu->category == 'dinner')
                <ul>
                    <li>
                        <button onclick="addToForm('{{ $Menu->item }}')" id="btn">{{ $Menu->item }}</button> : Rs. {{ $Menu->price }}
                    </li>
                </ul>
                @endif
            @endforeach
            
            <form id="order_form" method="POST" action="{{ route('place_order')}}">
                {{ csrf_field() }}
                Orders: <button type="submit">Place Order</button>
                <input type="hidden" name="table_no" value={{ $table_no }} />
            </form>

    </div>
@endsection