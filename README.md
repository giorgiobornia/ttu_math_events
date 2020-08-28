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
 
 01b) Add new seminars appropriately
        Not only do you have to add the folder and files of that seminar,
        but also you have to add it in the array in the file 
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
