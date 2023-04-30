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
      <a>Home</a>
    </li>
    <li class="nav-list-item">About</li>
    <li class="nav-list-item">Topic</li>
  </ul>
</header>
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div>
        <textarea name="content"></textarea>
    </div>
    <div>
        <button type="submit">Post</button>
    </div>
</form>