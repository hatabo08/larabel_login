<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ホーム画面</title>
  <link href="{{asset('assets/app-DTCNYjK1.css')}}"rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <div class="container">
  <div class="mt-5">
  <x-alert type="success" :message="session('login_success')"/>

  <h3>プロフィール</h3>
  <ul>
    <li>名前: {{ Auth::user()->name }}</li>
    <li>メールアドレス: {{ Auth::user()->email }}</li>
  </ul>
  <form action="{{ route('logout') }}"method="POST">
  @csrf
  <button class="btn btn-danger">ログアウト</button>
  </form>
  </div>
  </div>
</body>
</html>
