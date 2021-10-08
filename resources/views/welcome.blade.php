@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}  
        </div>  
    @endif
      
    {{-- <a href="{{url('/products')}}"><h3>Click here to view products</h3></a> --}}

    {{-- {{dd($products)}} --}}

    @if (($products->count() > 0))
      <h3>Welcome to my store</h3>
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




































{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html> --}}
