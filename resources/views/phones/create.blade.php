@extends('layout')
@section('title','phones')
    @section('header')
create phone
    @endsection
@section('content')
<div class="create">
    <form action="{{route('phones.store')}}" method="post" >
        @csrf
        <div>
            <label for="phone-name">phone name</label>
            <input id="phone-name"  name="phone-name" type="text" value="{{old('phone-name')}}" ><br>
            @error('phone-name')
            {{$message}}
            @enderror
        </div>
        <br><br>
        <div>
            <label for="phone-origin">phone origin</label>
            <input id="phone-origin"  name="phone-origin" type="text" value="{{old('phone-origin')}}"><br>
            @error('phone-origin')
            {{$message}}
            @enderror
        </div>
        <br><br>
        <div>
            <label for="phone-price">phone price</label>
            <input id="phone-price"  name="phone-price" type="number" value="{{old('phone-price')}}"><br>
            @error('phone-price')
            {{$message}}
            @enderror
        </div>
        <br><br>
        <div >
           <input type="submit" name="send" value="create" class="send">
        </div>
        @csrf
    </form>
</div>
@endsection
