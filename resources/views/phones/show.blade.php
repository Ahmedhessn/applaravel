@extends('layout')
@section('title','phones')
    @section('header')
phones
    @endsection
@section('content')
<div>

   <h2> <li>{{$phones['name']}}   <strong>{{$phones['origin']}}</strong>   {{$phones['price']}}</li></h2>
<a href="{{route('phones.edit',$phones->id)}}">Edit</a>
<br>
<form action="{{route('phones.destroy',$phones->id)}}" method="POST">

    @csrf
    @method('delete')
<input type="submit" name="delete" value="delete" style="width: 50px">
</form>
</div>
@endsection
