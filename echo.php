<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>テスト</title>
  <style type="text/css">
  <?php
        echo "body{ background-color:green;}";
   ?>

  </style>
</head>

<body>
<h1 id="btn">クラス</h1>
<?php
    // 文字列の出力
    echo "文字列";
    // 要素も出力、反映することができる
    echo '<h1>要素</h1>';
    // 計算結果の数値なども表示できる
    echo 5+8;
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {
    //javascriptのコードも出力することができる
    <?php
        echo "btn.addEventListener('click',()=> {
            console.log('テスト');
        });"
     ?>

});
</script>

</html>
