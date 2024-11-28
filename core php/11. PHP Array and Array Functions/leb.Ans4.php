<?php
function move_zero($arr)
{
    $count=0;
    $num=count($arr);

for($i=0;$i<$num;$i++)
{
    if($arr[$i] !=0)
    {
        $arr[$count++] = $arr[$i];
    }
}
while($count<$num)
{
    $arr[$count++]=0;
}

 return $arr;
}

$array_1 = array(1,3,0,8,5,0,7,0,6);

print_r(move_zero($array_1));
?>