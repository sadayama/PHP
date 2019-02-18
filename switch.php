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
$quoteValue = "もじれつ";
// 引数に応じてcase文を実行する
switch($quoteValue){
    case 1:
    echo "数字の1です";
    // 現在のブロックから脱出する
    // switch文では以降のswitch文を実行させないために記述する
    break;
    // caseには複数のパターンを記述することも可能
    // どちらかに当てはまれば分岐する
    case "文字列":
    case "もじれつ";
    echo "文字列";
    break;
    // どのcaseにも当てはまらない場合はdefault文を実行する
    default:
    echo "それ以外";
    break;
};

?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
