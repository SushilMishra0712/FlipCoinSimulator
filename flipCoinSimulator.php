<?php

$heads=0;
$tails=0;

echo "How many times do you want to flip a coin?\n";
fscanf(STDIN,"%d",$no_of_times_flip);

for($count=0;$count<$no_of_times_flip;$count++)
{
    echo "Press Enter to flip coin";
    fscanf(STDIN,"%s");
    $random = rand(0,1);
    if($random==1)
    {
        echo "Head\n";
        $heads++;
    }
    else
    {
        echo "Tail\n";
        $tails++;
    }
}

$dictionary = array("Head"=>$heads,"Tail"=>$tails);
print_r($dictionary);

$percentage_heads = ($heads/$no_of_times_flip)*100;
echo "Percentage of heads:".$percentage_heads."%\n";
$percentage_tails = ($tails/$no_of_times_flip)*100;
echo "Percentage of tails:".$percentage_tails."%\n";

?>