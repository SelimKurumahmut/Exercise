<?php require "logic.php" ?>
<h1>Contestants</h1>

<?php
foreach($contestants as $contestant){
    $result=rand(0,1);
    if($result==0)
         echo $contestant ." is a loser <br>";
    else
        echo $contestant ." is a winner <br>";
}
?>