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
 ?>
    </select>

</form>
