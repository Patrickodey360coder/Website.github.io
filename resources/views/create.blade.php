@extends('layouts.app')

@section('content')
  <form action="/products" method="POST" class="">
    @csrf
    <input class="form-control" type="text" placeholder="product name" name="name">
    <input class="form-control" type="text" placeholder="description" name="description">
    <input class="form-control" type="text" placeholder="price" name="price">
    <input class="form-control" type="submit" value="Add">
  </form>
@endsection