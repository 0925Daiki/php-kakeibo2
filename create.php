<?php
  
// dbconnect.phpを読み込む→DBに接続
include_once('./dbconnect.php');

  // 処理の流れ
  // 1.画面で入力された値を取得
  // 2.PHPからMySQLへ接続
  // 3.SQL文を作成して、画面で入力された値をrecordsテーブルに追加
  // 4.index.phpに画面遷移する

  // 1.画面で入力された値を取得
  $date = $_POST['date'];
  $title = $_POST['title'];
  $amount = $_POST['amount'];
  $type = $_POST['type'];






?>