<?php
$states = array_merge(
    file("DATA/html/states.html",FILE_IGNORE_NEW_LINES),
    file("DATA/html/territories.html",FILE_IGNORE_NEW_LINES),
    file("DATA/html/armed_forces.html",FILE_IGNORE_NEW_LINES)
    // getting all the files into a huge array
);

function comparestrings($a,$b){
    strcasecmp(strip_tags($a),strip_tags($b)); // this compare two strings at a time which is bigger
    //strip tags reomve php and html tags
}
usort($states,'comparestrings');
file_put_contents('DATA/html/sorted.html',implode(PHP_EOL,$states));
echo "<select>";
include 'DATA/html/sorted.html';
echo "</select>";