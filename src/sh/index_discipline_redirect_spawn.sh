#!/bin/bash

 CONTAINER=$1;
 
 
if test "$CONTAINER" = ""; then
echo "The second argument must be the directory (either relative or absolute) where all seminars are"; exit;
fi

 cd $CONTAINER


 for file in   algebra_and_number_theory  analysis  applied_math  biomath  geometry  logic_topology  math_club  math_ed  prep_for_profession  quantum_homotopy  real_algebraic_geometry   statistics; 
#  for file in   colloquia;                # you have to change the paths in the file for this
#  for file in   meetings_and_conferences; # you have to change the paths in the file for this
 do
 cd $file; 
#  touch about.txt; 
#   pwd;
    cp ../../src/sh/index_discipline_redirect.php index.php
 cd ../; 
 done
