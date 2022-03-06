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
        <h1><a class="navbar-brand" href="/home">ついつたー</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-lg-2">
            <li class="nav-item">
              <a class="nav-link my-1 my-lg-0 mx-2" href="/home" style="text-align: center">プロフィール</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-1 my-lg-0 mx-2" href="/home" style="text-align: center">お問い合わせ</a>
            </li>
          </ul>
          <div class="d-none d-lg-inline-block col-12" style="max-width: calc(0.5rem + 150px); font-size: 0; text-align: justify">
            <form action="{{ route('logout') }}" method="post" id="logoutForm">
                @csrf
            </form>
            <button type="submit" form="logoutForm" class="btn btn-danger me-2 col-12" style="max-width: 150px" onclick="">ログアウト</button>
          </div>
          <div class="d-inline-block d-lg-none col-12 mt-2" style="font-size: 0">

            <button type="submit" form="logoutForm" class="btn btn-danger mx-2 col-12"" style="max-width: calc(100% - 1rem)">ログアウト</button>

          </div>
        </div>
      </div>
    </nav>
    <div class="container px-0 pt-0 pb-5 mb-5">
      <h1 class="m-4 lead">ほーむ</h1>
      <div class="mt-4 mx-2 p-2" style="max-width: 500px; border-radius: 5px; box-shadow: 0 0 4px #ADB1C0">
      <img src="{{ asset('img/boy_01.png') }}" alt="user">
      <div class="d-inline ms-2">{{ \Auth::user()->name }}</div>
        <div class="mx-2">
          <form action="{{ route('create.tweet') }}" method="post" id="tweetForm">
            @csrf
            <textarea class="col-12" name="content" id="textarea" cols="" rows="1" placeholder="つぶやき" style="border: none; resize: none"></textarea>
          </form>
          <div class="" style="text-align: right">
            <button class="btn btn-primary" type="submit" form="tweetForm">つぶやく</button>
          </div>
        </div>
      </div>
      <h2 class="m-4 lead">さいしんのつぶやき</h2>
      <div id="tubuyaki-list" class="mt-4 mx-2 p-0" style="max-width: 500px; border-radius: 5px; box-shadow: 0 0 4px #ADB1C0">
        <ul>
          <li>
            <button id="tubuyaki-reload">つぶやきをよみこむ</button>
          </li>
          @foreach ($tweets as $key => $tweet)
          <li>
            <div class="tubuyaki">
                <a href="/profile/{{ $user->email }}">
                  <img src="{{ asset('img/boy_0'.($key%3+1).'.png') }}" alt="user">
                </a>
              <div class="tubuyaki-user">{{ $tweet->user->name }}</div>
              <div class="tubuyaki-tubuyaki">{{ $tweet->content }}</div>
            </div>
            <div class="tubuyaki-ripusuko">
              <button class="tubuyaki-ripu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"/></svg></button>
              <button class="tubuyaki-suko"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg></button>
            </div>
          </li>
          @endforeach
          <li>
            <div class="tubuyaki">
              <img src="{{ asset('img/boy_02.png') }}" alt="user">
              <div class="tubuyaki-user">テストユーザー</div>
              <div class="tubuyaki-tubuyaki">てすとのつぶやき</div>
            </div>
            <div class="tubuyaki-ripusuko">
              <button class="tubuyaki-ripu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"/></svg></button>
              <button class="tubuyaki-suko"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg></button>
            </div>
          </li>
          <li>
            <div class="tubuyaki">
              <img src="{{ asset('img/boy_03.png') }}" alt="user">
              <div class="tubuyaki-user">テストユーザー</div>
              <div class="tubuyaki-tubuyaki">てすとのつぶやき</div>
            </div>
            <div class="tubuyaki-ripusuko">
              <button class="tubuyaki-ripu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"/></svg></button>
              <button class="tubuyaki-suko"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg></button>
            </div>
          </li>
          <li>
            <div class="tubuyaki">
              <img src="{{ asset('img/boy_04.png') }}" alt="user">
              <div class="tubuyaki-user">テストユーザー</div>
              <div class="tubuyaki-tubuyaki">てすとのつぶやき</div>
            </div>
            <div class="tubuyaki-ripusuko">
              <button class="tubuyaki-ripu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"/></svg></button>
              <button class="tubuyaki-suko"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"/></svg></button>
            </div>
          </li>
          </li>
        </ul>
      </div>
      <div style="display: flex">
        <div><a href="{{ $tweets->previousPageUrl() }}">前へ</a></div>
        <div>
            {!! Form::open(['url' => $tweets->path(), 'method' => 'get']) !!}
                <input
                    type="number"
                    name="page"
                    placeholder="1"
                    min="1"
                    max="{{ $tweets->lastPage() }}"
                    value="{{ $tweets->currentPage() }}"
                >
            {!! Form::close() !!}
        </div>
        <div><a href="{{ $tweets->nextPageUrl() }}">次へ</a></div>
      </div>
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
      //textareaの要素を取得
      let textarea = document.getElementById('textarea');
      //textareaのデフォルトの要素の高さを取得
      let clientHeight = textarea.clientHeight;

      //textareaのinputイベント
      textarea.addEventListener('input', ()=>{
        //textareaの要素の高さを設定（rows属性で行を指定するなら「px」ではなく「auto」で良いかも！）
        textarea.style.height = clientHeight + 'px';
        //textareaの入力内容の高さを取得
        let scrollHeight = textarea.scrollHeight;
        //textareaの高さに入力内容の高さを設定
        textarea.style.height = scrollHeight + 'px';
      });
    </script>
  </body>
</html>
