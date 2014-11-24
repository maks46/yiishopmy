<?php
echo 'sfsfsdf';

  $sum=0;
 foreach ($models as $key){
     $pattern="/^[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$/";
     $subject = $key->o_create_time;
     preg_match_all($pattern, $subject,$result);
     echo $result['0'];
     if ($result){
     
     }
     
     
 }
?>
