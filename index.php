<!-- 問題１ -->
<?php
for($i=0;$i<=100;$i++){
  echo $i . '<br>';
}
?>
<!-- 問題２ -->
<?php
for($i=1;$i<10;$i++){
    echo $i*3 .' ';
}
?>
<!-- 問題３ -->
<?php
for($i = 1;$i <= 100;$i++){
  if($i %3 === 0 && $i % 5 === 0){
    echo 'FizzBuzz';
  }elseif($i % 5 === 0){
    echo 'Buzz';
  }elseif($i % 3 === 0){
    echo 'Fizz';
  }else{
    echo $i;
  }
  echo '<br>';
}
?>
<!-- 問題４ -->
<?php
for($i=1;$i<=100;$i++){
    echo $i.' ';
    if($i % 10 === 0){
      echo '<br>';
    }
  }
?>
<!-- 問題５ -->
<?php
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
$i=0;
foreach($alpha as $a){
  if($a ==='A'){
    $i++;
  }
}
?>
<!-- 問題６ -->
<?php
$english=70;
$math=70;
$total=$english+$math;
if($english>=60 && $math>=60 && $total>=140){
  echo '合格！';
}else{
  echo'残念';
}
// 問題７
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
      $res = $i * $j . ' ';
      echo $res;
  }
  echo '<br>';
}
// 問題８
$primeNumbers = [];
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j <= $i; $j++) {
        if ($i % $j === 0 && $j < $i) {
            break;
        } 

        if ($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);