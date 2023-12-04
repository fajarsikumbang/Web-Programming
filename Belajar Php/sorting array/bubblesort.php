<?php
// bubble sort complexity o(n2) o n squere.

// array which we wan to wan to sort
$array = [10,5,6,7,2,66,77,33,22,11,8,1,78,99];

$length = count($array);

for($i=0;$i<$length; $i++)
    {
        for($j=0;$j<($length-1-$i); $j++)
        {
            if($array[$j] > $array[$j+1])
            {
                $temp = $array[$j]; // temp = 10
                $array[$j] = $array[$j+1]; // array[0] = 5;
                $array[$j+1] = $temp; // array[1] = 10
            }
        }
    }
// echo "<pre>";
// print_r($array);
echo "Sorting Data";
for($k=0;$k<$length;$k++)
{
    echo "<br>".$array[$k];
}
?>