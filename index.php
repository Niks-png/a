<?php

// for ($x=2; $x<=100; $x+=2){
//     echo"$x <br>";
// }
// $y=1;

// echo "whileee";

// while ($y<=100){
//     if($y%2==0){
//         echo"$y";
//     }
//     $y=$y+1;
// } -->


// echo "2 uzdevums";
// $faktorials = 1*2*3*4*5*6*7*8*9*10;
// echo($faktorials);
// echo"skolotaja uzde";
// $ž =1;

// for($x=1; $x<=10; $x=$x+1){
// $ž= $ž*$x;
// }
// echo"$ž";

// echo"3 uzdevums";
// $x_1=1;
// for($x=1; $x<=1000; $x=$x+0){
// echo"$x <br>";
// $xplus1=$x_1 +$x;
// $x_1=$x;
// $x=$xplus1;
// }

// echo"4 uzdevums";
//  $x=0;
//  for($x=3; $x<=100; $x=$x+1){
// if(($x % 3== 0 || $x % 5==0) && $x % 15 !=0){
//     echo"$x<br>";
// }
//  }

// $latv_pilsetas=["Limbzi"=>4,
//                 "cesis"=>18,
//                 "riga"=> 8];
//                 print_r($latv_pilsetas);
//  $dzivnieki=["kakis"=>"meow",
//                 "suns"=>"wooofff",             
//                  "bear "=> "raghhhh",
//                   "skibidi_toilet"=>"skibidi toilet"];          
//  print_r (array_keys($dzivnieki));




// $dataStringi=file_get_contents("https://jsonplaceholder.typicode.com/posts");
// $posts= json_decode($dataStringi,true);
// var_dump($posts[69][title]);


$dataStringi=file_get_contents("https://jsonplaceholder.typicode.com/posts");
$posts= json_decode($dataStringi);
foreach($posts as $pos){
    echo"$pos->title<br>";

}

?>