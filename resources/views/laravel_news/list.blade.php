<!DOCTYPE html>
 <html>

 <head>
  <meta charset='utf-8'>
  <title>larabelnews<</title>
  <!--<link rel="stylesheet" href="stylesheet.css">-->
 </head>

 <body>


 <!--確認ダイアログを表示するための関数-->
 <script>
  function dialog(){
    let popup =confirm("入力に間違いはないですか？")

    return popup;
    }　
 </script>

  <h1>larabalnews</h1>
     <!--エラーメッセージの表示-->

      
  <!--投稿-->
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

  <!--コメント-->
  <hr>
  <div>
     <!--foreachで投稿を繰り返し表示させていく-->
 
  <!--記事全文・コメントへのリンク貼り付け--><!-- id=$ARTICLE[0]でurlにidを付随-->
  <p>
    
      </p>
  <hr>
  <div>
  
  </div>

 </body>

</html>
