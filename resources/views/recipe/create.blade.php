@extends('layouts.app')
@section('content')
    <div class="flex flex-col bg-amber-50 h-screen justify-center items-center font-sora pt-36 overflow-hidden">
        <form class="w-1/2 shadow-md rounded-lg px-16 py-16 bg-white flex-col" method="POST" action="/recipes" enctype="multipart/form-data" style="z-index: 1000 !important;">
            @csrf
            <header class="flex justify-center items-center text-green-700 -mt-6 pb-10 text-xl font-light">Upload Recipe</header>
            <div class="flex flex-wrap">
                <label for="title" class="block text-green-700 mb-2">
                    {{ __('Title') }}:
                </label>

                <input id="title" type="text" class="form-input w-full mb-5 p-2 shadow-sm border @error('title')  border-red-500 @enderror"
                       name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                @error('title')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-wrap">
                <label for="duration" class="block text-green-700 mb-2">
                    {{ __('Cooking Time') }}:
                </label>
                <input id="duration" type="text"
                       class="form-input w-full mb-5 p-2 shadow-sm border @error('duration') border-red-500 @enderror" name="duration"
                       value="{{ old('duration') }}" required autocomplete="cookTime" autofocus>

                @error('duration')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="image" class="block text-green-700 mb-2">{{ __('Recipe Image') }}:</label>
                <input type="file" class="form-control-file w-full mb-5 @error('image') border-red-500 @enderror" id="image" name="image">
                @error('image')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="ingredients" class="block text-green-700 mb-2">
                    {{ __('Ingredients') }}:
                </label>
                <textarea id="ingredients" type="ingredients" id="show-white-space"
                       class="form-input w-full p-3 mb-5 shadow-sm border overflow-y:scroll @error('ingredients') border-red-500 @enderror" rows="3" name="ingredients"
                       required autocomplete = "ingredients"></textarea>
                @error('ingredients')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-wrap">
                <label for="description" class="block text-green-700 mb-2">
                    {{ __('Description') }}:
                </label>

                <textarea id="description" type="description" class="form-input w-full mb-5 p-3 shadow-sm border overflow-y:scroll"
                       name="description" rows="3" required autocomplete="description"></textarea>
            </div>
            <div class="flex flex-wrap">
                <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                    {{ __('Upload') }}
                </button>
        </form>
    </div>
    <style>
        .show-white-space {
            white-space: pre-wrap;
        }
    </style>


@endsection
