@extends('layouts.app')

@section('content')
      @foreach ($products as $product)
        <div style="margin: 2em">
          <a href="/products/{{$product->id}}">{{$product->name}} - ${{$product->price}}</a>
        </div>
      @endforeach
@endsection