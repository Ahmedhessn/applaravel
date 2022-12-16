@extends('layout')
@section('title','phones')
    @section('header')
phones
    @endsection
@section('content')
<div class="create">
    @if (count($phones)>0)
    @foreach ($phones as $phone)
    <a href="{{route ('phones.show',['phone'=>$phone['id']])}}">
    <div class ="list"><li>
        {{$phone['name']}}<strong>  {{$phone['origin']}}  {{$phone['price']}}</strong>
    </li></div>
    </a>
    @endforeach

    @else <h4>there are not found phones</h4>
    @endif
</div>
@endsection


