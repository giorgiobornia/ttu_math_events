#!/bin/bash

#  ./week_file_spawn.sh ../../all/ 2019 spring


container=$1;
 year=$2;
 semester=$3;
 
 
if test "$container" = ""; then
echo "The second argument must be the relative path to 'all', 'all' included"; exit;
fi


 week_container='week';

     cd $container/$year/$semester/$week_container;



# # 2019, Spring 
#  months=( 4  4  4 4 4  3  3  3 3  2  2  2 2  1  1);
#    days=(29 22 15 8 1 25 18 11 4 25 18 11 4 28 21);

# 2019, Fall 
 months=( 8 9 9 9 9 9      10 10 10 10   11 11 11 11  12);
   days=(26 2 9 16 23 30   7 14 21 28    4 11 18 25    2);


 
 mysize_m=${#months[@]};
 mysize_d=${#days[@]};
 
 if test "$mysize_m" != "$mysize_d"; then exit; fi
 
 indices=$(( $mysize_m - 1 ));
 
 for month_day_begin in `seq 0 1 $indices`
   do
#       mkdir -p $container/$year/$semester/$week_container/
      cp ../../../../src/sh/week_file.php ${months[$month_day_begin]}_${days[$month_day_begin]}.php
  done

  cd ../../../; 
