#!/bin/bash

 container=$1;
 year=$2;
 semester=$3;
 
 
 # you have to check that the correct group is set for each seminar and that the permissions are "rwxrwxr-x" !!!
 
 
 
if test "$container" = ""; then
echo "The second argument must be the directory (either relative or absolute) where all seminars are"; exit;
fi

 cd $container;


 for discipline in  algebra_and_number_theory   analysis   applied_math  biomath  geometry  logic_topology  math_club  math_ed  prep_for_profession quantum_homotopy real_algebraic_geometry  statistics;
#  for discipline in  colloquia;
   do
     mkdir -p $discipline/$year/$semester;
     cd $discipline/$year/$semester;
     cp -r ../../../../src/sh/template_seminar_year_semester/.   .  # copies a folder without copying the outer containing folder as well 
#      cp -r ../../../../src/sh/template_seminar_year_semester/index.php   .  # copies only the index file
     cd ../../../; 
  done

 
 echo "Remember to ACTIVATE the edition for each seminar"  # @todo see how to do that automatically: you have to take the existing file, see if the year is there, if so add the other semester, otherwise add a new line of the type 'year,semester'
