<?php
$sort = array(1,7,25,74,8,36,4,5,67,0);
    $temp = 0;
    echo"Array before sorted ";
    print_r($sort);
    for( $i = 0; $i < count($sort); $i++ ){
        for($j=0;$j < count($sort)-1;$j++){
            if($sort[$j]>$sort[$j+1]){
                $temp = $sort[$j];
                $sort[$j] = $sort[$j+1];
                $sort[$j+1]=$temp; 
            }
        }
    }
    echo"<br>";
    echo "Array after sorted ";
    print_r($sort);
    ?>