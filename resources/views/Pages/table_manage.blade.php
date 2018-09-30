@foreach ($tables as $table)
    <{{ $table }}
    <a href="#">delete</a>
@endforeach
<a href="{{ route('add_new_table') }}">add tables</a>