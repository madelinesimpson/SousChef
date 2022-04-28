@extends('layouts.app')
@section('content')
@if (Auth::check())
    <div class="flex pt-32 justify-center items-center mx-auto -ml-5">
        <div class="flex flex-col justify-center items-center">
            <img src="{{ URL::to('/') }}/images/avatar.png" width = "200" height = "200" class="rounded-full">
            <h1 class="text-2xl font-light justify-center pt-5">{{$user->username}}</h1>
            <h2 class="text-large font-light justify-center pb-3">{{$user->recipes->count()}} recipes</h2>
            <hr class="bg-green-600" style="width:50%; margin:0 auto; height: 4px;">
            <div class="grid grid-cols-3 gap-4 justify-center items-center">
                @foreach($user->recipes as $recipe)
                    <a href="/recipe/{{$recipe->id}}" class="transform">
                        <div class="max-w-sm w-full lg:max-w-full lg:flex pt-5 shadow-sm hover:shadow-lg">
                            <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" src="{{ URL::to('/') }}/uploads/{{$recipe->image}}">
                            <div class="border-r border-b border-t border-gray-200 shadow-sm rounded lg:rounded-b-none p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <div class="text-gray-900 font-bold text-xl mb-2">{{$recipe->title}}</div>
                                    <p class="text-gray-700 text-base">{{$recipe->duration}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@else
    {{redirect()->route('home')}}
    @endif

    @endsection
