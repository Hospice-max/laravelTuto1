@extends('layouts.master')

@section('title')
Articles
@endsection

@section('content')
<h2>Articles</h2>
@endsection

@section('body')  
@each('partials.article', $articles, 'article', 'partials.no-articles')
@endsection