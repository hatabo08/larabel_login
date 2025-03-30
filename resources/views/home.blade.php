<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ホーム</title>
</head>
<body>

  {{-- ログイン成功メッセージ --}}
  @if (session('login_success'))
    <div class="alert alert-success">
      {{ session('login_success') }}
    </div>
  @endif

  <h3>プロフィール</h3>
  <ul>
    <li>名前: {{ Auth::user()->name }}</li>
    <li>メールアドレス: {{ Auth::user()->email }}</li>
  </ul>

</body>
</html>
