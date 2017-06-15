@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>포럼 글 목록</h1>
        <hr />
        @php
        $articles->load('user');
        @endphp
        <ul>
            @forelse($articles as $article)
                <li>
                    {{ $article->title }}
                    <small>by {{ $article->user->name }}</small>
                    <small>by {{ $article->user->id }}</small>
                    <small>by {{ $article->user->email }}</small>
                </li>
            @empty
                <p>글이 없습니다.</p>
            @endforelse
        </ul>
    </div>

    <div class="text-center">
        {!!  $articles->render() !!}
    </div>

    <div>
        <a href="/articles/create">새 글</a>
    </div>
@stop