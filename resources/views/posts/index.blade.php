@include('layouts.test_header')
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
  <li class="nav-list-item"><a href="{{ route('test') }}">ポートフォリオ</a></li>
</ul>
@if ($user)
    <p class="hello">こんにちは、{{ $user->name }}さん！</p>
@else
    <p class="hello">ログインしていません。</p>
@endif

@section('title', 'Board.index')

@foreach ($posts as $post)
    <div class="post">
        <div class="num">
            <div>{{ $post->id }}:</div>
            <div class="user">{{ $post->user->name }}</div>
        </div>
        <p class="content">{{ $post->content }}</p>
        
    </div>
@endforeach
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@include('layouts.footer')
</body>
</html>