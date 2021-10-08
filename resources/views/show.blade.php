@extends('layouts.app')

@section('content')
  <div style="margin: 2em">
    <h1>{{$products->name}}</h1>
    <p>{{$products->description}}</p>
    <p>${{$products->price}}</p>
    <a href="/products/{{$products->id}}/edit">Edit</a>

    <form action="/product/{{$products->id}}" method="POST">
      @csrf
      @method('delete')
      <input type="submit" name="_method" value="delete" class="btn btn-danger btn-icon">
    </form>
  </div>
@endsection