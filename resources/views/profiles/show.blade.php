@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
       <div class="col-4 text-center">
       <img src="https://www.secret-source.eu/wp-content/uploads/2017/11/Laravel-logo.jpg" class="rounded-circle">
       </div>

       <div class="col-8">
      <div class="d-flex align-items-baseline">
      <div class="h4 mr-3 pt-2">{{ $user->username }}</div>
       <button class="btn btn-sm btn-primary">S'abonner</button>
      </div>
      <div class="d-flex mt-3">
        <div class="mr-3"><strong>{{ $user->posts->count() }}</strong> publication(s)</div>
        <div class="mr-3"><strong>100</strong> abonnés</div>
        <div class="mr-3"><strong>20</strong> abonnements</div>
      </div>
      <div class="mt-3">
      <div class="font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
      </div>
       </div>
    </div>
    <div class="row mt-5">
    @foreach ($user->posts as $post)
            <div class="col-4">
               <a href="">
               <img src="{{ asset('storage') . '/' . $post->image }}" class="w-100">
               </a>         
            </div>
        @endforeach
    </div>
</div>
@endsection
