@extends('layouts.app')

@section('content')
    <form style="margin: 2em" action="/edit/{{$products->id}}" method="POST">
      @method('PUT')
      @csrf

      {{$errors}}
      <input type="text" placeholder="name" value="{{$products->name}}" name="name"><br><br>
      {{-- @error('name')
        <div class="alert alert-danger">{{ $message }}</div>  
      @enderror --}}

      <input type="text" placeholder="description" value="{{$products->description}}" name="description"><br><br>
      {{-- @error('description')
        <div class="alert alert-danger">{{ $message }}</div>  
      @enderror --}}
      
      <input type="text" placeholder="price" value="{{$products->price}}" name="price"><br><br>
      {{-- @error('price')
        <div class="alert alert-danger">{{ $message }}</div>  
      @enderror --}}

      <input type="submit" value="submit">
    </form>
@endsection