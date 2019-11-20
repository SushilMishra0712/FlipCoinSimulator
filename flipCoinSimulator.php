<?php

$head_head_head=0;
$head_head_tail=0;
$head_tail_head=0;
$tail_head_head=0;
$tail_tail_head=0;
$tail_head_tail=0;
$head_tail_tail=0;
$tail_tail_tail=0;

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
            echo "Press Enter to flip coin";
            fscanf(STDIN,"%s");
            $random = rand(0,1);
            if($random==1)
            {
                echo "HeadHeadHead\n";
                $head_head_head++;
                
            }
            else
            {
                echo "HeadHeadTail\n";
                $head_head_tail++;
                
            }
        }
        else
        {
            echo "HeadTail\n";
            echo "Press Enter to flip coin";
            fscanf(STDIN,"%s");
            $random = rand(0,1);
            if($random==1)
            {
                echo "HeadTailHead\n";
                $head_tail_head++;
                
            }
            else
            {
                echo "HeadTailTail\n";
                $head_tail_tail++; 
            }
            
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
            echo "Press Enter to flip coin";
            fscanf(STDIN,"%s");
            $random = rand(0,1);
            if($random==1)
            {
                echo "TailHeadHead\n";
                $tail_head_head++;
                
            }
            else
            {
                echo "TailHeadTail\n";
                $tail_head_tail++;
                
            } 
        }
        else
        {
            echo "TailTail\n";
            echo "Press Enter to flip coin";
            fscanf(STDIN,"%s");
            $random = rand(0,1);
            if($random==1)
            {
                echo "TailTailHead\n";
                $tail_tail_head++;
                
            }
            else
            {
                echo "TailTailTail\n";
                $tail_tail_tail++;
                
            }
        }
        
    }
    
}

$dictionary = array("HHH"=>$head_head_head,"HHT"=>$head_head_tail,"HTH"=>$head_tail_head,"THH"=>$tail_head_head,
                    "TTH"=>$tail_tail_head,"THT"=>$tail_head_tail,"HTT"=>$head_tail_tail,"TTT"=>$tail_tail_tail);
print_r($dictionary);

$percentage_hhh = ($head_head_head/$no_of_times_flip)*100;
echo "Percentage of HHH:".$percentage_hhh."%\n";
$percentage_hht = ($head_head_tail/$no_of_times_flip)*100;
echo "Percentage of HHT:".$percentage_hht."%\n";
$percentage_hth = ($head_tail_head/$no_of_times_flip)*100;
echo "Percentage of HTH:".$percentage_hth."%\n";
$percentage_thh = ($tail_head_head/$no_of_times_flip)*100;
echo "Percentage of THH:".$percentage_thh."%\n";
$percentage_tth = ($tail_tail_head/$no_of_times_flip)*100;
echo "Percentage of TTH:".$percentage_tth."%\n";
$percentage_tht = ($tail_head_tail/$no_of_times_flip)*100;
echo "Percentage of THT:".$percentage_tht."%\n";
$percentage_htt = ($head_tail_tail/$no_of_times_flip)*100;
echo "Percentage of HTT:".$percentage_htt."%\n";
$percentage_ttt = ($tail_tail_tail/$no_of_times_flip)*100;
echo "Percentage of TTT:".$percentage_ttt."%\n";

?>