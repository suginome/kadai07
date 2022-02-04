<?php

//1. POSTデータ取得

$date = $_POST['date'];
$time = $_POST['time'];
$kaigi_id = $_POST['kaigi_id'];
$team = $_POST['team'];
$name = $_POST['name'];
$gidai = $_POST['gidai'];
$url = $_POST['url']; 



// 表示、表示確認したら全てコメントアウト
echo $date;
echo $time;
echo $kaigi_id;
echo $team;
echo $name;
echo $gidai;
echo $url; 

//2. DB接続します
try{
$pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

// 1. SQL文を用意
$sql = "INSERT INTO record_db(id, date, time, kaigi_id, team, name, gidai, url)VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7)";

$stmt = $pdo->prepare($sql);

// $stmt = $pdo->prepare("INSERT INTO record_db(id, time, kaigi_id, team, name, gidai ,url)
// VALUES(NULL, :a2, :a3, :a4, :a5, ;a6, :a7)");

$stmt->bindValue(':a1', $date, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $time, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $kaigi_id, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $team, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $gidai, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a7', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)


//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  // SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{
  // ５．index.phpへリダイレクト
  header("Location: recording.php");
  exit;
}
?>