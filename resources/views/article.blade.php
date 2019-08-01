@extends('layouts.default')
@section('content')
    @if(isset($articles))
        @foreach($articles as $article)
            <div class="content">
                <div class="">
                    <a href="/article/{{$article->id}}"><h3>{{$article->title}}</h3></a>
                </div>
                <p>{{$article->body}}</p>
                <p class="post-meta">Views: Posted by
                <a href="#">{{$article->author->name}}</a>
                on {{$article->created_at->format('M d Y')}}</p>
            </div>
        @endforeach
    @endif
@stop
