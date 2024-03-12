@extends('layouts.app')

@section('content')

@foreach ($comment as $comments)

<h1>{{ $comments->title }}</h1>
<h3>{{ $comments->description }}</h3>
    
@endforeach
@endsection 