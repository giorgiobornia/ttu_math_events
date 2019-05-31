#!/bin/bash

 container=$1;
 year=$2;
 semester=$3;
 
 
 
if test "$container" = ""; then
echo "The second argument must be the directory (either relative or absolute) where all seminars are"; exit;
fi

 cd $container;


 for discipline in  algebra_and_number_theory   applied_math   analysis  biomath  geometry  image_analysis  logic_topology  math_club  math_ed  prep_for_profession  real_algebraic_geometry  statistics;
#  for discipline in  colloquia;
   do
     mkdir -p $discipline/$year/$semester;
     cd $discipline/$year/$semester;
     cp -r ../../../src/sh/template_seminar_semester/.   .  # copies a folder without copying the containing folder as well
     cd ../../../; 
  done

 
 echo "Remember to ACTIVATE the edition for each seminar"  # @todo see how to do that automatically: you have to take the existing file, see if the year is there, if so add the other semester, otherwise add a new line of the type 'year,semester'
