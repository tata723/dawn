@extends('layouts.login')

@section('content')


<div class="create-area">
  <div><img src="images/{{ auth()->user()->images }}"></div>
  <form action="" method="post">

    <textarea name="post" rows="5" placeholder="何を呟こうかな、、、"></textarea>
    <p class="pull-right"><a class="btn btn-success" href="post/create-form">投稿する</a></p>
  </form>
</div>



@endsection