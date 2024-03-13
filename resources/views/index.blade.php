@extends('layouts.app')

@section('content')
    <div class=" background-image grid grid-cols-1 m-auto max-h-96">
    <div class="bg-black bg-opacity-50">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
        
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-9">
                   the mind of a cat
                        
                </h1>
                <h3 class="sm:text-white text-3xl  font-bold text-shadow-md pb-14">
                    By Dr. Fuzzypaws
                 </h3>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="images/Cat-bg.jpeg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
               Who am I?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                I'm Dr. Fuzzypaws, I have a PHD on Cat Behaviour and Purr science from the university of Meowssachusetts.
                I've dedicated my whole life to studying my fellow catmates and their behaviour. And Ive Realized how little 
                the common purrpulation knows about the profoundness of our specie's minds.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
            So I've decided to share my life work with you
             on this blog.
            </p>

            <a 
                href="/blog"
                class="uppercase  bg-green-300 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-green-600 text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            What you'll learn about in this blog
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Cat behavior
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Dog - Cat Relationships
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Napping
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Zoomies
        </span>

     
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            My most advanced investigations in one place. Don't be a scaredy cat and dive into the world of knowledge.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-teal-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    10 Signs your cat owns a Multi-Millionaire Business 
                </span>

                <h3 class="text-xl font-bold py-10">
                   Have you ever wondered where your cat goes out at night? or why they are sleepy all day?
                   Well, he might be the CEO of a multimillionare business. 

                   Here are 10 signs to look out for if you believe your cat could be part of the 1.1%.
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Reviews
        </span>

        <h2 class="text-4xl font-bold py-10">
            Consider leaving me a Review
        </h2>

        <p class="m-auto w-4/5 text-gray-500 pb-9" >
           A cat never stops learning, that is why is important for me to read your feedback so I 
           can make this blog the best learning experience possible
        </p>

        <a 
        href="/comments"
        class="uppercase my-9 bg-blue-800 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
        Leave a Review
    </a>
    </div>
@endsection