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
$i = 1;
 // while(条件式){処理}
while($i <= 5){
    echo $i;
    // 無限ループにならないように値を変更する
    $i++;
};

echo "<br>";
$i = 1;
// do{処理}while(条件式);
do{
    echo $i;
    $i++;
}while($i <=5);
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
