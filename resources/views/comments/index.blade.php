@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Reviews
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif


<div class="flex grid-cols-2 content-center mx-10 items-center justify-center">
@foreach ($comments as $comment)

    <div class=" flex gap-20 w-4/5 mx-8 py-15 border-b border-gray-200 max-w-lg items-center justify-center">
      
        <div >
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $comment->title }}
            </h2>

            <span class="text-gray-500">
                 <span class="font-bold  text-gray-800">{{ $comment->user->name }}</span>, {{ date('jS M Y', strtotime($comment->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $comment->description }}
            </p>

           

            @if (isset(Auth::user()->id) && Auth::user()->id == $comment->user_id)
           

                <span class="float-right">
                     <form 
                        action="/comments/{{ $comment->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>   

@endforeach
</div> 
@if (Auth::check())
    <div class="flex place-content-center  pt-15 w-4/5 m-auto">
        <a 
            href="/comments/create"
            class="bg-green-500 mb-8 -mt-3 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Leave a Review
        </a>
    </div>
@endif
@endsection