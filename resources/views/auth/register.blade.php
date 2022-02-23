<!doctype html>
<html lang="ja" style="position: relative; min-height: 100%;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- Local CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>ついつたー</title>
  </head>
  <body style="margin-bottom: 60px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <h1><a class="navbar-brand" href="/">ついつたー</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-lg-2">
            <li class="nav-item">
              <a class="nav-link my-1 my-lg-0 mx-2" href="/" style="text-align: center">ついつたーとは</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-1 my-lg-0 mx-2" href="/" style="text-align: center">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container px-0 pt-0 pb-5 mb-5">
      <h1 class="my-5 text-center">ついつたーに登録</h1>
      <form class="text-center mx-auto col-10" action="{{ route('register') }}" method="post">
        @csrf
        <label class="mt-4 mb-2">ユーザー名</label>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <input name="name" class="mx-auto form-control" placeholder="" value="{{ old('name') }}" style="max-width:300px">
        <label class="mt-4 mb-2">メールアドレス</label>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <input name="email" class="mx-auto form-control" placeholder="" value="{{ old('email') }}" style="max-width:300px">
        <label class="mt-4 mb-2">パスワード</label>
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <input name="password" class="mx-auto form-control" placeholder="8文字以上" type="password" id="password" style="max-width:300px">
        <div class="my-1">
          <input type="checkbox" class="form-check-input" id="PassCheck">
          <label class="form-check-label" for="PassCheck">パスワードを表示</label>  
        </div>
        <label class="mt-4 mb-2">パスワードの確認</label>
        @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <input name="password_confirmation" class="mx-auto form-control" placeholder="" type="password" id="password_confirm" style="max-width:300px">
        <div class="my-1">
          <input type="checkbox" class="form-check-input" id="PassConCheck">
          <label class="form-check-label" for="PassCheck">パスワードを表示</label>  
        </div>
        <button class="btn btn-primary d-block mt-5 mx-auto col-12" type="submit" style="max-width:300px">登録</button>
      </form>
    </div>
    <footer class="footer" style="position: absolute; bottom: 0; width: 100%; height: 60px; background-color: #F8F9FA">
      <div class="container">
        <p style="margin: 20px 0">© 2022 ついつたー</p>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
      const pwd = document.getElementById('password');
      const pwdCheck = document.getElementById('PassCheck');
      pwdCheck.addEventListener('change', function() {
          if(pwdCheck.checked) {
              pwd.setAttribute('type', 'text');
          } else {
              pwd.setAttribute('type', 'password');
          }
      }, false);
      const pwdcon = document.getElementById('password_confirm');
      const pwdconCheck = document.getElementById('PassConCheck');
      pwdconCheck.addEventListener('change', function() {
          if(pwdconCheck.checked) {
              pwdcon.setAttribute('type', 'text');
          } else {
              pwdcon.setAttribute('type', 'password');
          }
      }, false);
    </script> 
  </body>
</html>
