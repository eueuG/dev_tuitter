<!doctype html>
<html lang="ja" style="position: relative; min-height: 100%;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Local CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>ついつたー</title>
  </head>
  <body style="margin-bottom: 60px;">
    <div class="container p-0 mb-5">
        <h3>ユーザー登録</h3>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <input name="name" placeholder="名前">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
            <input name="email" placeholder="メールアドレス">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <input name="password" placeholder="パスワード">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <input name="password_confirmation" placeholder="パスワードの確認">
            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit">登録</button>
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
  </body>
</html>
