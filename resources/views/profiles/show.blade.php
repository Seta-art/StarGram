@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
       <div class="col-4 text-center">
       <img src="{{ $user->profile->getImage() }}" class="rounded-circle w-100" style="max-width: 200px">
       </div>

       <div class="col-8">
      <div class="d-flex align-items-baseline">
      <div class="h4 mr-3 pt-2">{{ $user->username }}</div>
       <follow-button></follow-button>
      </div>
      <div class="d-flex mt-3">
        <div class="mr-3"><strong>{{ $user->posts->count() }}</strong> publication(s)</div>
        <div class="mr-3"><strong>100</strong> abonnés</div>
        <div class="mr-3"><strong>20</strong> abonnements</div>
      </div>

      @can('update', $user->profile)
      <a href="{{ route('profiles.edit',['user' => $user->username]) }}" class="btn btn-outline-secondary mt-3">Modifier mes informations</a>
      @endcan
      
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
               <a href="{{ route('posts.show', ['post' => $post->id ]) }}">
               <img src="{{ asset('storage') . '/' . $post->image }}" class="w-100">
               </a>         
            </div>
        @endforeach
    </div>
</div>
@endsection
