@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h3>フォローしている読書家</h3>
            @foreach (\Auth::user()->followings as $following)
                <p>{{ $following->name }}</p>
            @endforeach
            <h3>フォローしている読書家の投稿</h3>
            <FollowingPosts/>
        </div>
        <div class="col-sm-8">
            <h1>{{ $post->title }}</h1>
            <p>{{ $user->name }}<p>
            <p>{{ $post->body }}<p>
            @if (Auth::id() == $user->id)
                {!! Form::open(['route' => ['post.delete', $post->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
</div>
@endsection
