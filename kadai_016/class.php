<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>
<body>
    <?php
    class Food{
        private $name;
        private $price;

        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price(){
            echo $this->price . "<br>";
        }
    }

    class Animal{
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height(){
            echo $this->height . "<br>";
        }
    }

    $apple = new Food("リンゴ", 100);
    $cat = new Animal("ネコ", 50, 6);

    print_r($apple);
    echo "<br>";
    print_r($cat);
    echo "<br>";
    $apple->show_price();
    $cat->show_height();
    ?>
</body>
</html>
