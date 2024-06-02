<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎</title>
</head>
<body>
    <p>
        <?php
        function sort_data($data,$flg){
            if($flg){
                sort($data);
            }else{
                rsort($data);
            }
            foreach ($data as $a) {
                echo $a.'<br>';
        }
        }
        $data = [5,10,1,6];
        sort_data($data,TRUE);
        sort_data($data,FALSE);

        ?>
    </p>

</body>
</html>