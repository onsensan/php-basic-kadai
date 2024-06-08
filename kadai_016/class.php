<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題16章</title>
</head>
<body>
    <p>
        <?php
        class Food{
            private $name;
            private $price;

            public function __construct(String $abc, int $def){
                $this->name = $abc;
                $this->price = $def;
            }

            //priceを出力
            public function show_price(){
                echo $this->price;
            }
        }
        class Animal{
            private $name;
            private $height;   
            private $weight;   

            public function __construct(String $n, int $h,int $w){
                $this->name = $n;
                $this->height = $h;
                $this->weight = $w;
            }

            //heightを出力
            public function show_height(){
                echo $this->height;
            }            
        }
        $ap = new Food('アップル',250);

        $cat = new Animal('cat',30,60);

        print_r($ap);
        echo'<br>';
        print_r($cat);
        echo'<br>';

        $ap->show_price();
        echo'<br>';
        $cat->show_height(); 
        echo'<br>';

        ?>
    </P>
    
</body>
</html>