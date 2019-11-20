<?php

echo "Press enter to flip coin";
fscanf(STDIN,"%s");
$random = rand(0,1);
if($random==1)
{
    echo "Outcome is Head\n";
}
else
{
    echo "Outcome is Tail\n";
}

?>