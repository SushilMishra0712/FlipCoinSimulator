<?php

$head_head=0;
$head_tail=0;
$tail_head=0;
$tail_tail=0;

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
        echo "Press Enter to flip coin";
        fscanf(STDIN,"%s");
        $random = rand(0,1);
        if($random==1)
        {
            echo "HeadHead\n";
            $head_head++;
            
        }
        else
        {
            echo "HeadTail\n";
            $head_tail++;
            
        }
        
    }
    else
    {
        echo "Tail\n";
        echo "Press Enter to flip coin";
        fscanf(STDIN,"%s");
        $random = rand(0,1);
        if($random==1)
        {
            echo "TailHead\n";
            $tail_head++;
            
        }
        else
        {
            echo "TailTail\n";
            $tail_tail++;
            
        }
        
    }
    
}

$dictionary = array("HH"=>$head_head,"HT"=>$head_tail,"TH"=>$tail_head,"TT"=>$tail_tail);
print_r($dictionary);

$percentage_head_head = ($head_head/$no_of_times_flip)*100;
echo "Percentage of HH:".$percentage_head_head."%\n";
$percentage_head_tail = ($head_tail/$no_of_times_flip)*100;
echo "Percentage of HT:".$percentage_head_tail."%\n";
$percentage_tail_head = ($tail_head/$no_of_times_flip)*100;
echo "Percentage of TH:".$percentage_tail_head."%\n";
$percentage_tail_tail = ($tail_tail/$no_of_times_flip)*100;
echo "Percentage of TT:".$percentage_tail_tail."%\n";

?>