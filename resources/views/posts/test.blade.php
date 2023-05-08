<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/styles/github.min.css">
    <link rel="stylesheet" href="{{ asset('test.css') }}" >
    <title>ポートフォリオ</title>
  </head>
  <body>

@include('layouts.test_header')


    <main>
      <div class="container">
        <h1>自己紹介</h1>
        <p class="lead">こんにちは！私についてご紹介します。</p>
        <table class="table table-bordered">
          <thead class="table-light">
            <tr><th colspan="2">基本プロフィール</th></tr>
          </thead>
          <tbody>
            <tr><td><p class="font-weight-bold">氏名</p></td><td>山田　太郎</td></tr>
            <tr><td><p class="font-weight-bold">生年月日</p></td><td>1995年1月1日</td></tr>
            <tr><td><p class="font-weight-bold">年齢</p></td><td>27才</td></tr>
            <tr><td><p class="font-weight-bold">出身学校名</p></td><td>サンプル大学（サンプル学部サンプル学科）</td></tr>
            <tr><td><p class="font-weight-bold">卒業年月</p></td><td>2018年3月</td></tr>
            <tr><td><p class="font-weight-bold">自己ＰＲ</p></td><td>新卒で入った飲食業界で接客業に長く従事してきましたので、対人スキルには自身があります。</td></tr>
          </tbody>
        </table>
        <table class="table table-bordered">
          <thead class="table-light">
            <tr><th colspan="2">IT系学習履歴</th></tr>
          </thead>
          <tbody>
            <tr><td><p class="font-weight-bold">資格</p></td><td>ITパスポート（2022年12月合格）<br />基本情報技術者（勉強中）</td></tr>
            <tr><td><p class="font-weight-bold">プログラミング</p></td><td>HTML/CSS：2カ月<br />PHP：1カ月</td></tr>
            <tr><td><p class="font-weight-bold">インフラ</p></td><td>AWS・EC2でLinux環境を構築中</td></tr>
          </tbody>
        </table>
      </div>
    </main>
@include('layouts.footer')
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>