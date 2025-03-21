<?php
    $age = -1;

    if($age >= 18){
        echo"you may enter this site<br>";
    }
    elseif($age <= 0){
        echo"this is an invald age<br>";
    }
    elseif($age >= 100)
    {echo"yoou are to old to enter this site<br>";}
    else{
        echo"you must be 18 to enter<br>";
    }


    $adult = true;

    if($adult == true){
        echo"you may enter this site <br><br>";
    }
    else{echo"must be an adult to enter <br><br>";}

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay=0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{$weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));}


    echo"You made \${$weekly_pay} this week";
?>
