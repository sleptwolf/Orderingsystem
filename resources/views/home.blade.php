@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href="/add_menu">Add Menu</a>
                    </div>
                    <div>
                        <a href="/manage_table">Manage Tables</a>
                    </div> 
                    <div>
                        <a href="/show_menu">View Current Menu</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
