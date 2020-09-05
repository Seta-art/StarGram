@extends('layouts.app')


@section('content')
@foreach($Users as $User)
<div class="row">
<div class="col-md-8"> 
    <a href="{{ route('profiles.show', ['user'=>$User->username]) }}">{{ $User->name }}</a>
    
</div>
</div>

@endforeach
@endsection