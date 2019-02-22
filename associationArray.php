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
    //　連想配列は　連想配列名=array(キー => 値)
    $associationArray = array(
        "key" => "value",
        "word" => "キー"
    );
    // 連想配列の呼び出しは　連想配列名[キー]
    echo $associationArray["key"];
    // 連想配列の追加は　連想配列名[キー] = 値
    $associationArray["newWord"] = "追加される値";
?>
<script type="text/javascript">
  "use strict";
const btn = document.getElementById("btn")
window.addEventListener('load',()=> {

});
</script>

</html>
