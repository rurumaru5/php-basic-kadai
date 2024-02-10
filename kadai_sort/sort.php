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
        //訂正箇所　$arrayの代入を無くした。
        sort_2way($nums, TRUE); //訂正箇所　引数に$numsと真偽値を入れた
        sort_2way($nums, FALSE); //訂正箇所
        function sort_2way($nums, $order){
          
        if($order) {
          echo "昇順にしました。<br>";
          sort($nums);
          foreach($nums as $num) {
            echo $num . '<br>';
          }
        }else {
          echo "降順にしました。<br>";
          rsort($nums);
          foreach($nums as $num) {
            echo $num . '<br>';
          }
         }
        }

      
        ?>
    </p>
</body>

</html>