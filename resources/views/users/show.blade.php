@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $user->name }}</h1>
            <p>{{ $user->bio }}<p>
            @if (Auth::id() == $user->id)
                <p>Edit Profile</p>
            @endif
        </div>
    </div>
</div>
@endsection
