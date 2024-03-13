@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
<div class="sm:grid grid-cols-2"> 
    <div class="max-w-9">
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light ">
        {{ $post->description }}
    </p>
</div>

    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>


</div>
<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Did you liked the post?
    </span>

    <h2 class="text-2xl font-bold py-10">
        Consider leaving me a Comment
    </h2>

    <a 
    href="/comments"
    class="uppercase my-9 bg-green-800 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
    Leave and read some Reviews
</a>
</div>
@endsection 