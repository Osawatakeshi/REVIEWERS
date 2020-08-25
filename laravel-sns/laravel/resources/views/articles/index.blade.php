@extends('app')

@section('title', '記事一覧')

@section('content')
  @include('nav')
  <div class="container mt-5">
    <ol class="review_list">
      @foreach($articles as $article)
        @include('articles.card')       
      @endforeach
    </ol>
  </div>
@endsection
