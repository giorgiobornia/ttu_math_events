# ttu_math_events
Web pages of all events at the Department of Mathematics and Statistics, Texas Tech University


Before a semester starts:

 01) Initialize all folders of each tree with the needed files and folders (seminars, colloquia, meetings and conferences)
      In principle, there is a script for that. 
      However, it is very risky to use because some seminar organizers may have been proactive
      and created the new semester files already.
      
      So, for "seminars", copy the template files by hand inside each seminar folder
      They are under src/sh/, it is the folder template_seminar_year_semester/
      
      For "colloquia" and "meetings_and_conferences", 
      copy from the corresponding previous semester and empty the old data (because there is a slight difference in some paths)
 
 01b) Add new seminars if needed
          Basically, just look at existing seminars and mimick their file structure
        - First you add the folder under seminars/ (no whitespaces in the folder name, use underscores please) 
        - Inside the new seminar folder, put the active_editions.csv file with the current year/semester
        - Inside the new seminar folder, you may put the about.txt file for info about the seminar
        - Inside the new seminar folder, put the index.php file that automatically redirects to the current year/semester 
        - Then you add  the year/semester subfolder structure, and in there you put the usual template files
        - Then you add it in the array (please, respect alphabetical order) in the file 
                     src/php/ttu_math_events.php
 
 
 02) Update all the "active_editions" files with the current semester
       Just add the corresponding semester, if that seminar is being run in that semester. 
       You have to do it by hand, I don't have a script for that yet, because it may vary from seminar to seminar
 
 03) Prepare all week pages
      Go to src/sh/ 
      Open the file week_file_spawn.sh and put the list of months and days for the beginning mondays
      Save the script and run it as:
          ./week_file_spawn.sh ../../all/
 
 
 04) Finally, change the current year and semester info
      Go to src/php/ttu_math_events.php and modify $current_year and $current_semester
