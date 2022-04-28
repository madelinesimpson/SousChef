@extends('layouts.app')
@section('content')
<div class="grid grid-cols-2 bg-amber-50">
    <div class="flex flex-col font-playfair-display h-screen pt-96 text-center">
        <div class="text-4xl">{{$recipe->title}}</div>
        <div class="pt-2 text-xl">{{$recipe->duration}}</div>
        <div class="text-sm">by {{$recipe->user->username}}</div>
    </div>
    <div class="overflow-hidden h-screen pt-20 -mt-2">
        <img class="" src="{{ URL::to('/') }}/uploads/{{$recipe->image}}">
    </div>
</div>
<div class="flex flex-col h-screen bg-white justify-center items-center font-playfair-display mx-32 text-xl">
    <div>Ingredients:</div>
    <div class="pt-2">{!!nl2br($recipe->ingredients, FALSE)!!}</div>
    <div class="pt-8">Description:</div>
    <div class="pt-2">{!!nl2br($recipe->description, FALSE)!!}</div>
</div>
    @endsection
