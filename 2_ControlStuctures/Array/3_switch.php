<?php 
$today = date("l");
switch ($today){
    case 'Monday':
        echo "wash on monday"; // monday will be executed cause today is monnday
        break;
        case "Tuesday":
            echo "Iron on Tuesday";
            break;
        case "Wednesday":
            echo "Mend on Wednesday";
            break;
        case "Thursday":
            echo "Churn on Thursday";
            break;
        case "Friday":
            echo "Clean on Friday";
            break;
        case "Saturday":
            echo "Bake on Saturday";
            break;
        case "Sunday":
            echo "Rest on Sunday";
            break;
        default:
            echo "I don't know what day it is";
            break;    
    
}



?>
