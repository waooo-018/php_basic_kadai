<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題16</title>
 </head>
 
 <body>
    <p>
         <?php
            class Food {
                public $name;
                public $price;

                public function show_price(string $price){
                    $this-> price = $price;
                }

                public function __construct(string $name,int $price) {
                    $this -> name = $name;
                    $this -> price = $price;
                }
            }

            $food = new Food ('ショートケーキ',500);

            print_r ($food);

            class Animal {
                public $name;
                public $height;
                public $weight;

                public function show_height(int $height){
                    $this-> height = $height;
                }

                public function __construct(string $name, int $height, int $weight) {
                    $this -> name = $name;
                    $this -> height = $height;
                    $this -> weight = $weight;
                }
            }
                $animal = new Animal ('ライオン',100,50);

                print_r ($animal);

                echo '<br>';
                echo $food -> price;

                echo '<br>';
                echo $animal -> height
         ?>
     </p>
 
 </html>