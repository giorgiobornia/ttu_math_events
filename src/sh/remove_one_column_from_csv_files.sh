#!/bin/bash

# ./index_discipline_year_semester_spawn.sh  ../../seminars/   2019    fall


 container=$1;
 year=$2;
 semester=$3;
 
 
 
if test "$container" = ""; then
echo "The second argument must be the directory (either relative or absolute) where all seminars are"; exit;
fi

 cd $container;


 for discipline in   algebra_and_number_theory  analysis  applied_math  biomath  geometry  image_analysis  logic_topology  math_club  math_ed  prep_for_profession  real_algebraic_geometry  statistics;
 do
 cd $discipline/$year/$semester; 
#  touch about.txt; 
#    pwd;

# cp ../../../../src/sh/template_seminar_year_semester/events.csv .;

cut -d, -f1-2,4-12  events.csv > events_new.csv;  #redirect on the same file doesn't work?!?

rm events.csv;
mv events_new.csv events.csv;




cd ../../../; 
 done
