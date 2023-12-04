<?php

$arr3 = [1,3,5,7,2,6,4];
    $assarr = [ 'nama' =>'Gunawan', 'umur' =>26, 'alamat'=>'Jakarta'];
    $assarr2 = [
        ['nama'=> 'Abdillah','umur'=>21],
        ['nama'=> 'Badrun','umur'=>41],
        ['nama'=> 'Zaki','umur'=>21],
        ['nama'=> 'Fauzan','umur'=>21],
        ['nama'=> 'Fikri','umur'=>21]
    ];
        // sort();rsort();asort();ksort();arsort();krsort();
        asort($arr3);
        asort($assarr);
        asort($assarr2);
        //
        foreach($arr3 as $k=>$v) {echo $k.' = '.$v.'<br>';}
        //
        echo "<hr>";
        foreach($assarr as $k=>$v) {echo $k.' = '.$v.'<br>';}
        //
        echo "<hr>";
        foreach($assarr2 as $k=>$v) {
            echo $k.' = ';
            print_r($v);
        }

?>