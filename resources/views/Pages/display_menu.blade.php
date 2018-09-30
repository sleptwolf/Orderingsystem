@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu <a href="{{ route('home') }}" > go back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Breakfast</h3>
                    @foreach ($Menus as $Menu)
                        @if($Menu->category == 'breakfast')
                        <ul>
                            <li>{{ $Menu->item }} : Rs. {{ $Menu->price }}</li>
                        </ul>
                        @endif
                    @endforeach     
                    <h3>Lunch</h3>
                    @foreach ($Menus as $Menu)
                        @if($Menu->category == 'lunch')
                        <ul>
                            <li>{{ $Menu->item }} : Rs. {{ $Menu->price }}</li>
                        </ul>
                        @endif
                    @endforeach  
                    <h3>Dinner</h3>
                    @foreach ($Menus as $Menu)
                        @if($Menu->category == 'dinner')
                        <ul>
                            <li>{{ $Menu->item }} : Rs. {{ $Menu->price }}</li>
                        </ul>
                        @endif
                    @endforeach              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
