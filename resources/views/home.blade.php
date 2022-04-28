@extends('layouts.app')
@section('content')
    <div class="w-full h-screen bg-home-background bg-cover flex justify-center items-center">
        <div class="flex flex-col transition ease-in-out delay-150 hover:scale-110 duration-200">
            <div class="flex">
                @if (Auth::check())
                     <a class="font-bold text-amber-50 text-3xl transform" href="/recipe/create">Share Something Delicious</a>
                @else
                    <a class="font-bold text-amber-50 text-3xl transform" href="/login">Share Something Delicious</a>
                @endif
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2 ml-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </div>
            <div>
                <hr class="bg-white mt-2" style="width:100%; height: 3px;">
            </div>
        </div>
    </div>
    <div class="bg-amber-50 h-screen"></div>
@endsection

