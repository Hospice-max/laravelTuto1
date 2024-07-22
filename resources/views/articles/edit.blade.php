@extends('layouts.master')

@section('title')
Éditer l'article {{ $article->title }}
@endsection

@section('content')
    <form action="article/{{ $article->id }}/edit" method="POST" enctype="multipart/form-data">
        @include('partials.article-form')
    </form>
@endsection