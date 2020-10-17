<?php
$files = scandir("DATA");
// this will scan the files and find the directories.
//

echo "<ul>";
foreach ($files as $file){
    echo "<li>";
    echo $file;
    echo "</li>";
}
/*
 *.
..
csv
html
json
xml
this is the file that showed up here
watch here both files with . and hidden folder showed up here.
 */

echo "</ul>";foreach ($files as $file){
    if(substr($file,0,1)!= "."){
    echo "<li>";
    echo $file;
    echo "</li>";
   /*
    * csv
html
json
xml
  see now all the files with . is gone.
   if(substr($file,0,1)!= "."){  it will start from 0 and the length will be 1.

    */
    }
}
readFolderFiles("DATA");

/*
 * csv
people.csv
html
armed_forces.html
countries.html
states.html
territories.html
json
top_programming_books.json
xml
educate_yourself.xml
free_the_geek.xml
phproundtable.xml
voices_of_the_elephpant.xml

each folder are connected with .csv folder and other things
 */

function readFolderFiles($dir)
{ $files= scandir($dir);
    echo "</ul>";
    foreach ($files as $file) {
        if (substr($file, 0, 1) != ".") {
            echo "<li>";
            if(is_dir($dir."/".$file)){
                echo $file;
                readFolderFiles($dir.'/'.$file);
                /*
                 * so for dir its going to dir then file.
                 * $dir/.$fille for example goes to DATA/csv, data/html and so forth will be function parameter
                 */
            }else{
             echo   '<a href="'.$dir.'/'.$file.'">'.$file. '</a>';
              /*
               * else the file will read like this
               * first go to dir.$file = then find the file name and read and wrote from it
               */
            }

            echo "</li>";
            /*
             * csv
         html
         json
         xml
           see now all the files with . is gone.
            if(substr($file,0,1)!= "."){  it will start from 0 and the length will be 1.

             */
        }
    }
    echo "</ul>";
}