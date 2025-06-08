<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
<?php
 function sort_2way($array, $order = 'asc') {
    if ($order === 'true') {
        echo "昇順にソートします。<br>";
        sort($array); // 昇順
    } elseif ($order === 'false') {
        echo "降順にソートします。<br>";
        rsort($array); // 降順
    } else {
        echo "ソート順が不正です。'true' または 'false' を指定してください。<br>";
        return;
    }

    foreach ($array as $value) {
        echo $value . "<br>"; // ブラウザで改行
    }

    echo "<br>"; // ソート結果同士の区切り用の改行
 }

  // 使用例
$nums = [15, 4, 18, 23, 10];

// 昇順で出力
sort_2way($nums, 'true');

// 降順で出力
sort_2way($nums, 'false');
?>

   </p>
</body>

</html>
