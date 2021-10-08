@extends('layouts.app')

@section('content')
  <div style="margin: 2em">
    <h1>{{$products->name}}</h1>
    <p>{{$products->description}}</p>
    <p>${{$products->price}}</p>
    <a href="/products/{{$products->id}}/edit">Edit</a>
    <a href="/products/{{$products->id}}">Delete</a>
  </div>
@endsection