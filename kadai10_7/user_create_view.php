<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー作成</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_user.php">ユーザ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー作成</legend>
    <label>名前：<input type="text" name="name"></label><br>
    <label>lid：<input type="text" name="lid"></label><br>
    <label>lpw：<input type="text" name="lpw"></label><br>
    <label>kanri_flg：
        <input type="radio" name="kanri_flg" value="0" checked="checked">一般
        <input type="radio" name="kanri_flg" value="1">管理者
    </label><br>
    <label>life_flg：
        <input type="radio" name="life_flg" value="0" checked="checked">有効
        <input type="radio" name="life_flg" value="1">無効
    </label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
