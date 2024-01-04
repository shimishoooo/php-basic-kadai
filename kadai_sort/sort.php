<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>
<body>
    <?php
    $nums = [15, 4, 18, 23, 10];
    function sort_2way($array, $order){
        if ($order == TRUE) {
            echo "昇順にソートします。<br>";

            sort($array);
        }else {
            echo "降順にソートします。<br>";

            rsort($array);
        }

        foreach ($array as $sort){
            echo $sort;
            echo "<br>";
        }
    }

    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
    ?>
</body>
</html>
