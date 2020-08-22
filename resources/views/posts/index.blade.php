@extends('layouts.app')
@section('content')

<div class="container">
	@foreach ($posts as $post)
		<div class="row">
			<div class="col-6 offset-3">
				 <a href="{{ route('posts.show', ['post' => $post->id ]) }}">
               <img src="{{ asset('storage') . '/' . $post->image }}" class="w-100">
               </a>   	
			</div>
		</div>
</div>
@endsection