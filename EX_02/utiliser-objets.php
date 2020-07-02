<?php

$date1= new Datetime ();
echo '<p>' .$date1->format ( 'y-m-d h:i:s'). '</p>';

$date2= new Datetime ('2020-06-22 9:00:00');
echo '<p>'  .$date2->format ('y-m-d h:i:s'). '<p>';

$interval= $date2-> diff($date1);
echo $interval->format ('%R%a days');

$interval = $date2 -> diff($date1);
echo '<p>' .$interval -> format(' %a days');
echo $interval -> format(' %h hours');
echo $interval -> format(' %i minutes'). '</p>';




?>