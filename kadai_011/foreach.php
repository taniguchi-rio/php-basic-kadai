<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       $onion = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
       foreach ($onion as $lavel => $info) {
           echo  "{$lavel}：{$info}<br>";
          }
       ?>
   </p>
</body>

</html>