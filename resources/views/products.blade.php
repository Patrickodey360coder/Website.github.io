@extends('layouts.app')

@section('content')
  @if (session()->has('success'))
    <div>
      {{session()->get('success')}}  
    </div>  
  @endif

  @foreach ($products as $product)
    <div style="margin: 2em">
      <a href="/products/{{$product->id}}">{{$product->name}} - ${{$product->price}}</a>
    </div>
  @endforeach
@endsection