<?php

echo "じゃーんけーんポーン！";
echo "<br>";
echo "<br>";


$random = mt_rand(1,3);
if($random === 1){
    echo '<img src="./img/グー.jpg" width=200px height=150px>';

}else if($random === 2){
    echo '<img src="./img/チョキ.jpg" width=200px height=150px>';

}else if($random === 3){
    echo '<img src="./img/パー.jpg" width=200px height=150px>';

}
?>