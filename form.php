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
<!--　action=送り先のurl method=送信方法> -->
<form action="#" method="post">
    <p>テキストボックス</p>
    <input type="text" name="sample">
    <p>改行を含むテキストボックス</p>
    <textarea  name= "sample2"></textarea>
    <input type="submit" value="送信">
</form>


<?php
// formで送ったデータは$_POSTの連想配列に加えられる
// $_POST[キー]　で呼び出す
echo $_POST["sample"];
echo $_POST["sample2"];
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
