<?php
// Strings:
// $stringOne = 'my email is ';
// $stringTwo= 'mario123@fake.com';
//echo $stringOne.$stringTwo;
// $name = 'mario';
// echo 'Hey, my name is' . $name;
//  echo "Hey my name is $name"
// echo "the ninja screamed \"whaaaaa\"";
// echo 'the ninja screamed "Whaaaaa"';
// echo $name[0]
// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
// echo str_replace('m', 'w', $name);


// Numbers:
// $radius = 25;
// $pi = 3.14; 
// echo $pi * $radius**2;
// echo 2 * (4 + 9) / 3;
// $radius--;
// echo $radius
// $age = 20;
// $age -= 10;
// echo $age
// Number Functions:
// echo ceil($pi);
// echo pi();


// Indexed Arrays: 
// $peopleOne = ['isaiah', 'naruto', 'ryu'];
// echo $peopleOne[0]
// $peopleTwo = array('Rick', 'Morty');
// echo $peopleTwo[0];
// $ages = [20, 30, 40, 50];
// print_r($ages);
// $ages[1] = 25;
// print_r($ages);
// $ages[] = 60;
// print_r($ages)
// array_push($ages, 70);
// print_r($ages);
// echo count($ages)
// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);


// Associative Arrays (key & value pairs):
// $ninjasOne = ['isaiah'=>'black', 'mario'=>'red', 'luigi'=> 'green'];
// // // echo $ninjasOne['mario']
// // print_r($ninjasOne);
// $ninjasTwo = array('bowser'=> 'green', 'peach'=> 'yellow');
// // print_r($ninjasTwo)
// $ninjasTwo['peach'] = 'pink';
// // print_r($ninjasTwo)
// // echo count($ninjasOne);
// $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
// print_r($ninjasThree);


// Multi-dimensional Arrays: 
// $blogs = [
//     ['title'=>'Mairo Party', 'author'=> 'Mario', 'content'=> 'lorem', 'likes'=> 30],
//     [ 'title'=>'Mario Kart Cheats', 'author'=> 'Toad', 'content'=> 'lorem', 'likes'=>  25],
//     [ 'title'=>'Zelda Hidden Chests', 'author'=> 'Link', 'content'=> 'lorem', 'likes'=>  50]
// ];
// // print_r($blogs[1][1]);
// // echo count($blogs)
// $blogs[] = ['title'=> 'Castle Party', 'author'=> 'Peach', 'content'=> 'lorem', 'likes'=> 100];
// // print_r($blogs);


// // How To Remove things from an array:
// $popped = array_pop($blogs);
// print_r($popped);

// Loops: 

// $ninjas = ['Isaiah', 'Ryu', 'Yoshi'];

// for($i = 0; $i < count($ninjas); $i++) {
//     echo $ninjas[$i] . '<br />';
// }

// foreach($ninjas as $ninja) {
//     echo $ninja . '<br />';
// }

// $products = [
//     ['name' => 'shiny star', 'price' => 20],
//     ['name' => 'green shell', 'price' => 10],
//     ['name' => 'red shell', 'price' => 15],
//     ['name' => 'gold coin', 'price' => 5],
//     ['name' => 'lightning bolt', 'price' => 40],
//     ['name' => 'bananna skin', 'price' => 2]
// ];

// foreach($products as $product) {
//     echo $product['name']. ' - ' . $product['price'];
//     echo '<br />';
// };

// $i = 0;

// while($i < count($products)) {
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }


// comparisions and booleans (true or false): 
// echo 5 < 10;
// echo 5 > 10;
// echo 5 == 10;
// echo 10 == 10;
// echo 5 != 10;
// echo 5 <= 5;
// echo 5 >= 5;
// echo 'isaiah' < 'yoshi';
// echo 'isaiah' > 'yoshi';
// echo 'isaiah' > 'Isaiah';
// echo 'mario' == 'mario';
// echo 'mario' == 'Mario';
// echo true == "1";
// echo false == "";


// Conditional Statements: 
// $price = 20;
// if ($price < 10) {
//     echo 'the conditon is met';
// } elseif ($price < 30) {
//     echo 'elsif condition met';
// } else {
//     echo 'condtion not met';
// }
// foreach ($products as $product) {
//     // if ($product['price'] < 15 && $product['price'] > 2) {
//     //     echo $product['name'] . '<br />';
//     // }

//     if ($product['price'] > 20  || $product['price'] < 10) {
//         echo $product['name'] . '<br />';
//     }
// }


// Continue and Break:
// foreach ($products as $product) {
//     if ($product['name'] === 'lightning bolt') {
//         break;
//     }
//     if ($product['price'] > 15) {
//         continue;
//     }
//     echo $product['name'] . '<br />';
// }


// Functions: 
// function sayHello($name = 'ohtoo', $time = 'morning')
// {
//     echo "Good $time $name";
// }
// sayHello('isaiah', 'night');

// function fromatProduct($product)
// {
//     // echo "{$product['name']} costs $ {$product['price']} to buy <br />";
//     return "{$product['name']} costs $ {$product['price']} to buy <br />";
// };
// // $formatted = fromatProduct(['name' => 'gold star', 'price' => 20]);
// // echo $formatted;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>

<body>

    <!-- <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) {  ?>
            <h3><?php echo $product['name']; ?></h3>
            <p>$ <?php echo $product['price']; ?></p>
        <?php } ?>
    </ul> -->

    <!-- <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name'] ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div> -->



</body>

</html>