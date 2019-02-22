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
// function　関数名(引数){処理}　で関数の定義
function name(){
    echo "関数内の処理が行われました";
};
//関数名(引数)で関数の呼び出し
name(); //"関数内の処理が行われました"

echo "<br>";
//　引数は　$引数名　で定義する
function test($quote1,$quote2){
    echo "引数は".$quote1."と".$quote2;
};
test("サンプル","テスト");
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
