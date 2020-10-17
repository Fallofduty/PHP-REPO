<?php
if($fh=fopen("DATA/html/combined.html","w")){
    fwrite($fh,file_get_contents("data/html/states.html"));
    fwrite($fh,PHP_EOL.'<optgroup label ="US outlying Territories">');
    fwrite($fh,PHP_EOL.file_get_contents("DATA/html/territories.html"));
    fwrite($fh,PHP_EOL.'<optgroup label ="Armed forces territory">');
    fwrite($fh,PHP_EOL.file_get_contents("DATA/html/armed_forces.html"));
    fwrite($fh,PHP_EOL.'</optgroup>');
    fclose($fh);
/*line by line explaning
1.$fh=fopen("DATA/html/combined.html","w")) --> this the file the program will try to write to a file. first will check whether the file exists or not
if the file does not exisits it willcreate it and write over it
2. writting file contents
fwrite($fh,'<optgroup label ="US outlying Territories">');
 fwrite($fh,file_get_contents("DATA/html/territories.html"));
//  first with optgroup the file is given a label
// then fwrite with file from get_contents which is territories same thing from armed forces
 *3 fwrite($fh,'</optgroup>');
 * optgroup label closed
 * then close closed the file
 *
 */
}
echo '<select>';
include "data/html/combined.html"; // the include the files here.
echo '</select>';