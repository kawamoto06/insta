<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('example.css') }}">
  <title>サンプルのサイト</title>
</head>
<body>
<!-- header -->
<header>
  <h1 class="headline">
    <a>サンプルのサイト</a>
  </h1>
  <ul class="nav-list">
    
    <li class="nav-list-item">
        @if(Auth::check())
        <!-- ログアウトボタンを表示 -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">ログアウト</a>
        </form>
        @else
        <a href="{{ route('login') }}">ログイン</a>
    @endif</li>
    <li class="nav-list-item">
        @if(Auth::check())
        <a href="{{ route('post.create') }}">投稿する</a>
        @else
        <a href="{{ route('register') }}">新規登録</a>
        @endif
    </li>
  </ul>
</header>
@if ($user)
    <p>こんにちは、{{ $user->name }}さん！</p>
@else
    <p>ログインしていません。</p>
@endif

@section('title', 'Board.index')

@foreach ($posts as $post)
    <div class="post">
        <p class="content">{{ $post->content }}</p>
        <p class="user">{{ $post->user->name }}</p>
    </div>
@endforeach
</body>
</html>


