<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
<?php
 function sort_2way($array, $order = true) {
    if ($order === true) {
        echo "昇順にソートします。<br>";
        sort($array); // 昇順
    } else {
        echo "降順にソートします。<br>";
        rsort($array); // 降順
    }

    foreach ($array as $value) {
        echo $value . "<br>";
    }

    echo "<br>"; // 出力の区切り
}

// 使用例
$nums = [15, 4, 18, 23, 10];

// 昇順（$order = true）
sort_2way($nums, true);

// 降順（$order = false）
sort_2way($nums, false);
?>

   </p>
</body>

</html>
