@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-10">
        <h1 class="text-5xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-15 ">
    <span class="text-black">
        Created by <span class="text-blue-500 font-bold text-xl">
        {{ $post->user->name }}</span>,
        on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-black pt-4 pb-4 leading-4 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection