<?php 
/* example 1 */

// $i = 1;
// while ($i <= 10) {
//     echo $i++;  /* the printed value would be
                   // $i before the increment
                   // (post-increment) */
// }

/* example 2 */

// $i = 1;
// while ($i <= 10):
//     echo $i;
//     $i++;
// endwhile;

// $a=[[1,3,4,5],[6,7,8,9]];
// foreach ($a as $v) {
// foreach ($v as $p) {
//  echo $p;
// }
// }

$arr= ["one","two","three","Four","stop","five","Six"];

foreach($arr as $val){
 if($val=="stop"):
  break;
 endif;
 echo $val."<br/>";
}
