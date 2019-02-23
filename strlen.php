<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>テスト</title>
  <style type="text/css">

  </style>
</head>

<body>
<h1 id="btn">クラス</h1>
<?php
$chr = "文字列";
// 文字列の文字数を返す関数
// mb_strlen(文字列)
// ()内には変数を入れても良い
echo mb_strlen($chr); //3

$chr = "test";
// strlenは文字列のバイト長を取得する
echo strlen($chr); //4
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
