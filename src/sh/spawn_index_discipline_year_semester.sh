#!/bin/bash

 container=$1;
 year=$2;
 semester=$3;
 
 
 
if test "$container" = ""; then
echo "The second argument must be the directory (either relative or absolute) where all seminars are"; exit;
fi

 cd $container;


 for discipline in   algebra_and_number_theory  analysis  applied_math  biomath  geometry  image_analysis  logic_topology  math_club  math_ed  prep_for_profession  real_algebraic_geometry  statistics  colloquia; 
 do
 cd $discipline/$year/$semester; 
#  touch about.txt; 
   pwd;
   cp ../../../src/sh/index_discipline_year_semester.php index.php;
#    ls -l ../../../src/sh/index_discipline_year_semester.php;
 cd ../../../; 
 done
