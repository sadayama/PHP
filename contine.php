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
for($i = 1;$i <=7;$i++){
  if($i%3 == 0){
    // 今のループを終了して次のループに移行する
    continue;
  };
  echo $i."<br>";
};
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
