@extends('layouts.app')

@section('content')

@foreach ($menus as $m)
    name: {{$m->name}} 
    category: {{$m->category->name}}
    price: {{$m->price}}
    photo: {{$m->photo}}
    description: {{$m->description}}
    <br>
@endforeach
    
<form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <select name="category_id">
        @foreach ($category as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
    </select>
    <input type="file" name="picture">
    <input type="number" name="price">
    <textarea name="description" rows="2"></textarea>
    <br>
    <button>submit</button>
</form>

@endsection