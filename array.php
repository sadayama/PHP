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
// $変数名 = array(値)で配列
$value = array("data","データ","でーた");
// $変数名[配列の位置]で配列内のデータを取り出す
echo "$value[1]<br>";
// 「$変数名[配列の位置] = 値」で配列の追加
//  []を指定しない場合は末尾を操作する
$value[3] = "挿入";
$value[] = "末尾";
echo "$value[3]<br>";
echo "$value[4]<br>";
// 配列をecho するとarrayと表示される
echo "$value<br>";


?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
