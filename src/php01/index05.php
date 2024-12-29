<?php

for ( $num = 1; $num <= 50; $num++){
  if ($num % 15 === 0) {
    echo "FizzBuzzです"."</br>";
  } elseif ($num % 3 === 0){
    echo "Fizzです". "</br>";
  } elseif ($num % 5 === 0){
    echo "Buzzです". "</br>";
  }  else { echo $num ."</br>";
  }
  }



