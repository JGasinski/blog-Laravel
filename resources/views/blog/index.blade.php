@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-10 border-b border-gray-200">
        <h1 class="text-5xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
<div class="w-4/5 m-auto mt-6 pl-2">
    <p class="w-1/5 mb-4 text-white bg-green-500 py-4">
        {{ session()->get('message') }}
    </p>
</div>
    
@endif

@if (Auth::check())
    <div class="pt-10 w-4/5 m-auto">
        <a href="/blog/create" class="bg-blue-500 uppercase px-6 text-xs text-white font-extrabold py-4
        border-double border-4 border-black rounded-md">
            Create post
        </a>

    </div>
@endif

{{-- {{ $posts }} --}}
@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-10 border-b">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        
        <div ml-10>
            <h2 class="text-black font-bold text-3xl pb-5">
                {{ $post->title }}
            </h2>
        

            <span class="text-black mx-auto">
            By <span class="text-xl font-bold text-black font-sans">{{ $post->user->name }}</span>, 
            Created on {{ date('jS M Y', strtotime($post->updated_at))}}
            </span>

            <p class="text-l text-black pt-6 pb-10 leading-6">
            {{ $post->description}}
            </p>
        
            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-white text-lg font-bold font-sans py-4 px-8
                border-double border-4 border-black rounded-md">
                Keep reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right ml-8 mt-4">
                    <a href="/blog/{{ $post->slug }}/edit"
                        class="text-white bg-blue-400 italic px-2 pt-3 hover:text-gray-900 pb-4 border-b-2
                        border-double border-4 border-black rounded-md">
                        Edit
                    </a>
                </span>

                <span class="float-right ">
                    <form
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button class="bg-blue-400 text-red-600 pb-4 pr-4 px-4 pt-3 border-double border-4 border-black rounded-md"
                            type="submit">
                            Delete
                        </button>
                    </form>
                </span>
            @endif
        </div>
    </div>
@endforeach

@endsection