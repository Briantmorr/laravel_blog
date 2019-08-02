@extends('layouts.default')
@section('content')
    @if(isset($articles))
        @foreach($articles as $article)
            <div class="article content">
                <div class="">
                    <a href="/article/{{$article->id}}"><h3>{{$article->title}}</h3></a>
                </div>
                <p dusk="Article-Content">{{$article->body}}</p>
                <p class="post-meta">Views: <span dusk="Views">{{$article->popularity}}</span> Posted by
                <a href="#">{{$article->author->name}}</a> in {{$article->category->name}}
                on {{$article->created_at->format('M d Y')}}</p>
            </div>
        @endforeach
    @endif
@stop
