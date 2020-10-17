<form action="">
    <label for="country">Country</label>
    <select name="country" id="">
        <?php
         include "DATA/html/countries.html"
        /*
         * in here the files are included here will show up select label
         */
         ?>
    </select>

    <label for="states">States</label>
    <select name="state" id="state">
        <?php
     if($fh = fopen("DATA/html/states.html","r")){ // first open the file
         while(!feof($fh)){
             /* while file is not empty
              *
              */
             $line = fgets($fh);
             if(strpos($line,'Oregon')){
                 echo str_replace(">Oregon",'selected>Oregon',$line); // first find the value oregon if the value is found selected will be oregon and inject  in $line
        } else{

        echo $line; // echo line if no oregeon is there
        }
        }
        fclose($fh); // close the file
        }
     echo '<optgroup label="us outlying territories" >';
     $states = file_get_contents("DATA/html/territories.html"); // reads enteire file to a string
        echo $states; // this will show the label under here
     echo '</optgroup>';
        echo '<optgroup label="us armedforces" >';
     $state_array = file("DATA/html/armed_forces.html"); // file reads file into array
        foreach ($state_array as $line){
            echo str_replace("Armed Forces","",$line);
        }
     echo '</optgroup>';
        /*
         * three ways to interact with a file
         * open connectring it to file and handle it line by line before closing it
         * work with entire files as a string
         * work with entire files with object or array
         */
        ?>
    </select>

</form>

