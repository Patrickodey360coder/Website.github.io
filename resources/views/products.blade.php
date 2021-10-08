@extends('layouts.app')

@section('content')
  @if (session()->has('success'))
    <div class="alert alert-success">
      {{session()->get('success')}}  
    </div>  
  @endif

    @if ($products->count() !== 0)

      @foreach ($products as $product)
        <div style="margin: 2em">
          <a href="/products/{{$product->id}}">{{$product->name}} - ${{$product->price}}</a>
        </div>
      @endforeach
        
    @else
     
        <h1 class="text-danger">There are no products to be displayed</h1>
        <a href="{{url('products/create')}}" class="btn btn-primary">Add Products</a>
      
    @endif
@endsection