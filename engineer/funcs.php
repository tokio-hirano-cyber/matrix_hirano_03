<?php
// XSS対策
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// DB接続（※DB名/ユーザー/パスをあなたの環境に合わせて変更）
function db_conn(){
  $dbn  = 'mysql:dbname=matrix;charset=utf8mb4;host=localhost';
  $user = 'root';
  $pwd  = '';
  try {
    return new PDO($dbn, $user, $pwd, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
  } catch (PDOException $e) {
    exit('DB Connection Error: '.$e->getMessage());
  }
}

function sql_error($stmt){
  $error = $stmt->errorInfo();
  exit('SQL Error: '.$error[2]);
}

function redirect($file){
  header('Location: '.$file);
  exit;
}
