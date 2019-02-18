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
// breakは実行中のfor,foreach,while,do while,switchの実行を終了する
for ($i = 1; $i<4;$i++){
    echo "1度だけ実行<br>";
    break;
};

$sample = array("配列","実行されません");

foreach($sample as $value){
    echo $value;
    break;
}
while($i++<3){
    echo "<p>while文</p>";
    break;
};
switch(1+3){
    case 4:
        echo "<p>switch</p>";
        break;
    default:
        echo "<p>非表示</p>";
        break;
};
// 引数を与えると、複数の階層で実行を終了する
for ($i = 0;$i < 8;++$i){
    do {
        // forとdo whileを終了する
        echo "<p>break 2で抜ける</p>";
        break 2;
    }while($i++ >3);
};
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
