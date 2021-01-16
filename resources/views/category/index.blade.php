@extends('layouts.app')

@section('content')
    

<table>
    <th>
        <th>name</th>
    </th>
    @foreach ($categories as $c)
        <tr>
            <td>{{$c->name}}</td>
        </tr>
    @endforeach
</table>
<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <input type="text" name="name" class="form-control">
    <button>Submit</button>
</form>

@endsection