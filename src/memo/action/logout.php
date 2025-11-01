<?php
session_start(); //セッション開始

//セッション情報を空にして破棄
$_SESSION = [];
session_destroy();

//ログイン画面にリダイレクト
header('Location: ../../login');
exit;