@include('layouts.header')
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

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data'>
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div>
        <textarea name="content"></textarea>
    </div>
    <div>
      <input type="file" name="thumbnail" />
    </div>
    <div>
        <button type="submit">登録</button>
    </div>
    {{ csrf_field() }}
</form>