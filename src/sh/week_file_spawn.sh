#!/bin/bash

 container=$1;
 year=$2;
 semester=$3;
 
 
 
if test "$container" = ""; then
echo "The second argument must be 'all'"; exit;
fi

     cd $container/$year/$semester;


 for month_day_begin in  (4, 29) (4, 22) (4, 15) (4, 8) (4, 1) (3, 25)  (3, 18) (3, 11) (3, 4) (2, 25) (2, 18) (2, 11) (2, 4) (1, 28) (1, 21)
   do
     mkdir -p $discipline/$year/$semester;
     cp ../../../src/sh/week_file_month_day.php $discipline/$year/$semester/$week/month_day_begin[0]_month_day_begin[1].php
  done

  cd ../../../; 
