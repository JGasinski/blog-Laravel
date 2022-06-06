@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-10">
                    Welcome to my blog                
                </h1>
                <a 
                    href="/blog"
                    class="text-center text-white py-2 px-4 font-bold text-2xl hover:text-blue-400 ">
                    Read more 
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-10">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_960_720.jpg" width="400">
        
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h1 class="text-3xl font-extrabold text-gray-700 text-decoration-line: underline
            underline-offset-4">
                New technology trends of 2022 :
            </h1>

            <div class="text-xl ">
                <ul class="list-disc ml-6">
                    <li class="mt-4">Artificial Intelligence (AI) and Machine Learning.</li>
                    <li>Virtual Reality and Augmented Reality.</li>
                    <li>Machine Learning.</li>
                    <li>Intelligent Apps.</li>
                    <li>Internet of Things (IoT).</li>
                    <li>5G.</li>
                </ul>
            </div>
            
            <div>
                <p class="py-4 text-gray-800 text-sm pb-10">
                    More elements ....
                </p>
            </div>
            

            <a
                target="_blank" href="//www.simplilearn.com/top-technology-trends-and-jobs-article/"
                class=" bg-blue-500 text-white text-sm font-bold py-4 px-8 border-double border-4 border-black rounded-md hover:text-gray-900">
                Find out more
            </a>
        </div>

    </div>

    <div class="text-center pt-10 bg-blue-500 text-white ">
        <h2 class="text-3xl pb-4 text-l text-decoration-line: underline underline-offset-4
            decoration-solid" >
            Currently learning :
        </h2>
        <span class="font-extrabold block text-2xl py-1 ">
            PHP 
        </span>
        <span class="font-extrabold block text-2xl py-1 ">
            Laravel 
        </span>
        <span class="font-extrabold block text-2xl py-1 ">
            VueJs
        </span>
        <span class="font-extrabold block text-2xl py-1 pb-10">
            Tailwindcss
        </span>
    </div>

    <div class="text-center py-10">
        <span class="uppercase text-lg text-blue-500">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-8">
            Recent Posts
        </h2>

        {{-- <p class="m-auto w-4/5 text-black">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo adipisci iste placeat recusandae delectus vero, nisi quod 
        </p> --}}

    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-400 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs font-bold">
                    Post title 
                </span>

                <h3 class="text-xl font-bold py-10">
                    Post content
                </h3>

                <a 
                    href="/blog"
                    class=" bg-white text-black text-xs font-bold py-3 px-5 border-double border-4 border-black rounded-md hover:text-blue-400">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2018/03/22/02/37/email-3249062_960_720.png" alt="">
        </div>
    </div>
@endsection