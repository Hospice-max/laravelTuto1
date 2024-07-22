@extends('layouts.master')

@section('content')
    <div>
        {{-- Formulaire pour créer un nouvel article --}}
        <form method="POST" action="{{ url('articles/create') }}">
        @csrf
            <div>
                {{-- Inclusion du formulaire d'article --}}
                @include('partials.article-form')
            </div>
        </form>
    </div>
@endsection

@section('content')
    <form action="/article/{{ $article->id }}/edit" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('partials.article-form')
    </form>
@endsection