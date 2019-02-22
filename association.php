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
//連想配列
$association = array(
    // キー => 値
    'test' => 'テスト',
    'sample' => 'サンプル'
);
echo $association['test'] ;
echo '<br>';
// 追加は変数名['キー'] = '値';
$association['addition'] = '追加されました';
echo $association['addition'];

// foreach文
// 配列または連想配列に対して、先頭のデータから順に繰り返し処理を行う
// 配列
// $変数名 =[]でarrayを省略できる。
$sample = ['配列','出ました'];
foreach($sample as $value){
    echo '<br>';
    echo $value;
}

// 連想配列
// foreach($連想配列名 as キー変数 => 変数値){処理};
foreach($association as $key => $value){
    echo '<br>';
    echo $key.$value;
}
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
