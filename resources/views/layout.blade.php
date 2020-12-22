<!DOCTYPE html>
 <html>

 <head>
  <meta charset='utf-8'>
  <title>larabelnews<</title>
  <!--<link rel="stylesheet" href="stylesheet.css">-->
  <link
        rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
 </head>

 <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

 <!--確認ダイアログを表示するための関数-->
 <script>
  function dialog(){
    let popup =confirm("入力に間違いはないですか？")

    return popup;
    }　
 </script>

  <h1>larabalnews</h1>
  <!--投稿-->
 <div>
    <form id="push"  method="POST" name="lalavel news"  onsubmit="return dialog()">
       <div>
          <p>タイトル</p>
           <input type="text" name="title" >
       </div>
       <div>
           <p>記事</p>
           <textarea row="10"cols="60"name="text" value="text" ></textarea>
       </div>
       <div>
           <input type="submit" name="push" value="投稿"　>
       </div>
    </form>
 </div>
  <!--コメント-->
  <hr>
  <div>
     @yield('content')
  </div>
 </body>

</html>
