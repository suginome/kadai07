<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>スギノメモ</title>
   <link href="css/record.css" rel="stylesheet">

   <nav id="gnav">
      <label for="menu_bar01">メニュー</label>
         <div  id="menu_bar01" >
            <ul class="inner">
                  <li><a href="#">トップ</a></li>
                  <li><a href="#">録音</a></li>
                  <li><a href="#">会議スケジュール予約</a></li>
                  <li><a href="#">実施会議一覧</a></li>
                  <li><a href="#">使い方</a></li>
                  <li><a href="#">会議参加心得</a></li>
            </ul>
         </div>
   </nav>


</head>

<body>
   <header>
      <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="navbar-header"><a class="navbar-brand" href="record_select.php">スギノメモ</a></div>
            </div>
      </nav>
   </header>





   <form method="post" action="record_insert.php">
      <h1 class="kihon">基本情報
                  <div class=jouhou>
                        <label>開催日<br><input type="date" name="date"></label>
                        <p>開催時間<br><input type="time" name="time"></p>
                        <p>会議ID<br><input type="text" name="kaigi_id"/></p>
                     <fieldset>
                        <legend>会議詳細情報</legend>
                        <p>部門・チーム<br><input type="text" name="team"></p>
                        <p>氏名<br><input type="text" name="name"></p>
                        <p>議題<br><textarea name="gidai"></textarea></p>
                        <p>記録先ドキュメント<br><input type="URL" name="url"></input>
                     </fieldset>
                  </div>
         <input type="submit" value="登録">
      </h1>
   </form>


<!-- formタグ界隈を修正。NULLを一回外す？ -->



</body>