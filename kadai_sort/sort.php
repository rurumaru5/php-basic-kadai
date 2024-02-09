<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10];
        $array = $nums;
        $order = TRUE;
        sort_2way($array, $order);
        $order = FALSE;
        sort_2way($array, $order);
        function sort_2way($array, $order){
          
        if($order) {
          echo "昇順にしました。<br>";
          sort($array);
          foreach($array as $num) {
            echo $num . '<br>';
          }
        }else {
          echo "降順にしました。<br>";
          rsort($array);
          foreach($array as $num) {
            echo $num . '<br>';
          }
         }
        }

      
        ?>
    </p>
</body>

</html>