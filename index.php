<?php
// トリボナッチ
// function three_sum($count, $a, $b, $c){
//      for($i = 4; $i <= $count; $i++)
//      {
//          $total2 = $a + $b + $c;
//          echo  $i . "番目" . $total2 . ", ";
//          echo "\n";
//          $a = $b;
//          $b = $c;
//          $c = $total2;
//          $total2 = 0;
//      }
// }
// echo three_sum(32, 1, 0, 5);
// echo "\n";

// 4乗
// $total = 0;
// for($i = 0; $i <= 64; $i++)
// {
//     $sum = $i**4;
//     $total += $sum;
// }
// echo $total;

// 逆数をどんどん足していく
// $total = 0;
// $bunnbo = 1;
// $count = 1;
// while($total < 12)
// {
//     $total += 1 / $bunnbo;
//     if($total >= 12)
//     {
//         echo "$count : " . $total . " ";
//     }
    
//     $bunnbo++;
//     $count++;
// }

// 荷物がいっぱいです
// $total = 0;
// $count = 0;
// for($i = 500; $i >= 0; $i--)
// {
//     $total += $i;
//     if($total < 5000)
//     {
//         echo $i . ", ";
//     } else {
//         $count++;
//         echo $count . "台目がいっぱいです。";
//         $total = 0;
//         echo "\n";
//     }
// }

// 切手・切手・切手
// $count = 0;
// for($a = 0; $a <= 30; $a++)
// {
//     for($b = 0; $b <= 40; $b++)
//     {
//         for($c = 0; $c <= 30; $c++)
//         {
//             $sum[$count] = ($a * 205) + ($b * 82) + ($c * 30);
//             echo $a . ":" . $b . ":" . $c . "= " . $sum[$count];
//             echo "\n";
//             $count++;
//         }
//     }
// }
// $unique = array_unique($sum);
// echo count($unique);

// ピタゴラスな三角形
$count = 0;
for($a = 1; $a < 1000; $a++)
{
    for($b = 1; $b < 1000; $b++)
    {
        for($c = 1; $c < 1000; $c++)
        {
            if( ($a**2 + $b**2) == $c**2)
            {
                $area = $a * $b / 2;
                if($area <= 8000)
                {
                    echo "a:" . $a . " " . "b:" . $b . " " . "c:" . $c . "  " . $area;
                    echo "\n";
                    $count++;
                }
            }
        }
    }
}
echo $count;

?>