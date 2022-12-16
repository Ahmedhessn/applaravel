@extends('layout')
@section('title','phones')
    @section('header')
Edit phone
    @endsection
@section('content')
<div class="create">
    <form action="{{route('phones.update',['phone'=>$phones->id])}}" method="post" >
        @csrf
        @method('PUT')
        <div>
            <label for="phone-name">phone name</label>
            <input id="phone-name"  name="phone-name" type="text" value="{{$phones->name}}" ><br>
            @error('phone-name')
            {{$message}}
            @enderror
        </div>
        <br><br>
        <div>
            <label for="phone-origin">phone origin</label>
            <input id="phone-origin"  name="phone-origin" type="text" value="{{$phones->origin}}"><br>
            @error('phone-origin')
            {{$message}}
            @enderror
        </div>
        <br><br>
        <div>
            <label for="phone-price">phone price</label>
            <input id="phone-price"  name="phone-price" type="number" value="{{$phones->price}}"><br>
            @error('phone-price')
            {{$message}}
            @enderror
        </div>
        <br><br>
        <div >
           <input type="submit" name="send" value="edit" class="send">
        </div>
        @csrf
    </form>
</div>
@endsection
