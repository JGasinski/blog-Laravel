@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-10">
        <h1 class="text-5xl">
            Create Post
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-15">
    <form
        action="/blog/"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input
            type="text" 
            name="title"
            placeholder="Post title"
            class="py-15 bg-grey-50 block border-b-2 w-full h-20 text-4xl outline-none">

        <textarea
        name="description"
        placeholder="Description"
        class="mt-2 py-10 bg-gray-50 block border-b-2 w-full h-60 text-2xl outline-none"
        ></textarea>

        <div class="bg-transparent pt-2 pb-2">
            <label class="w-40 flex flex-col items-center px-2 py-2 bg-white text-black shadow-lg tracking-wide
            uppercase border border-black cursor-pointer">
                <span class="mt-2 mb-2 text-base ">
                    Select file
                </span>
                <input
                type="file"
                name="image"
                class="hidden">
            </label>

        </div>

        <button type="submit"
        class="uppercase mt-10 bg-blue-500 text-lg text-white py-2 px-2 border border-white ">
            Submit Post
        </button>
    </form>
</div>

@endsection