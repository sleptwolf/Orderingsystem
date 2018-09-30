@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Menu <a href="{{ route('home') }}" > go back</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('insert_menu') }}">
                        {{ csrf_field() }}
                        <div class="form-group" >
                            <label> Select Category</label>
                            <div class="form-group">
                                <input class="form-control" type="text" name="new_category" id="new_category" oninput="disable_category()" placeholder="Insert new category..."/>
                            </div>
                            <select name="category" class="form-control" id="select" required >
                                <option value="breakfast">Breakfast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="form-group" >
                            <input class="form-control" type="text" name='item' placeholder="name of item" required />
                        </div>
                        <div class="form-group" >
                            <input class="form-control" type="number" name='price' placeholder="price of item" required />
                        </div>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
