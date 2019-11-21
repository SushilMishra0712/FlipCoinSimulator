<?php

$head=0;
$tail=0;
$head_head=0;
$head_tail=0;
$tail_head=0;
$tail_tail=0;
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
        $head++;
        echo "Press Enter to flip coin";
        fscanf(STDIN,"%s");
        $random = rand(0,1);
        if($random==1)
        {
            echo "HeadHead\n";
            $head_head++;
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
            $head_tail++;
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
        $tail++;
        echo "Press Enter to flip coin";
        fscanf(STDIN,"%s");
        $random = rand(0,1);
        if($random==1)
        {
            echo "TailHead\n";
            $tail_head++;
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
            $tail_tail++;
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

//Singlet Combination
$dictionary_singlet = array("H"=>$head,"T"=>$tail);
$percentage_heads = ($head/$no_of_times_flip)*100;
echo "Percentage of heads:".$percentage_heads."%\n";
$percentage_tails = ($tail/$no_of_times_flip)*100;
echo "Percentage of tails:".$percentage_tails."%\n";
arsort($dictionary_singlet);
echo "Sorted Number of Wins in Singlet Combination\n";
print_r($dictionary_singlet);
$max_no_of_wins = max($dictionary_singlet);

foreach($dictionary_singlet as $combination=>$value)
{
    if($value==$max_no_of_wins)
    {
    echo "Winning Combination is:".$combination."\n";
    echo "No of times win:".$value."\n";
    }
}

//Doublet Combination
$dictionary_doublet = array("HH"=>$head_head,"HT"=>$head_tail,"TH"=>$tail_head,"TT"=>$tail_tail);
$percentage_head_head = ($head_head/$no_of_times_flip)*100;
echo "Percentage of HH:".$percentage_head_head."%\n";
$percentage_head_tail = ($head_tail/$no_of_times_flip)*100;
echo "Percentage of HT:".$percentage_head_tail."%\n";
$percentage_tail_head = ($tail_head/$no_of_times_flip)*100;
echo "Percentage of TH:".$percentage_tail_head."%\n";
$percentage_tail_tail = ($tail_tail/$no_of_times_flip)*100;
echo "Percentage of TT:".$percentage_tail_tail."%\n";
arsort($dictionary_doublet);
echo "Sorted Number of Wins in Doublet Combination\n";
print_r($dictionary_doublet);
$max_no_of_wins = max($dictionary_doublet);

foreach($dictionary_doublet as $combination=>$value)
{
    if($value==$max_no_of_wins)
    {
    echo "Winning Combination is:".$combination."\n";
    echo "No of times win:".$value."\n";
    }
}


//Triplet Combination
$dictionary_triplet = array("HHH"=>$head_head_head,"HHT"=>$head_head_tail,"HTH"=>$head_tail_head,"THH"=>$tail_head_head,
                    "TTH"=>$tail_tail_head,"THT"=>$tail_head_tail,"HTT"=>$head_tail_tail,"TTT"=>$tail_tail_tail);
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

arsort($dictionary_triplet);
echo "Sorted Number of Wins in Triplet Combination\n";
print_r($dictionary_triplet);
$max_no_of_wins = max($dictionary_triplet);

foreach($dictionary_triplet as $combination=>$value)
{
    if($value==$max_no_of_wins)
    {
    echo "Winning Combination is:".$combination."\n";
    echo "No of times win:".$value."\n";
    }
}

?>