<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      if(isset($_POST["comment"]) && isset($_POST["name"])){
      
        $name = htmlspecialchars($_POST["name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたの名前は「${name}」です。");
        print("あなたのコメントは「${comment}」です。");
      } else{
    ?>
    
      <p>名前、コメントを入力してください。</p>
      <form method="POST" action="index.php">
        <input name="name" placeholder="名前"/>
        <br>
        <textarea name="comment" rows="4" cols="40" placeholder="コメント"/></textarea>
        <input type="submit" value="送信" />
      </form>
      
    <?php
      }
    ?>
  </body>
</html>
