<!doctype html>
<html lang="ja" style="position: relative; min-height: 100%;">
  @include('layout._head')
  <body class="@yield('pageClass')" id="body">
    <nav>
        @include('layout._head')
    </nav>
    <main>
        @yield('content')
    </main>
    @include('layout._foot')


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

