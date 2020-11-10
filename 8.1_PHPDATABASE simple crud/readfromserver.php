<?php
include ("db.php");
include ("INC/header.php");

?>



<div class="container text-center">
    <?php
    while ($row = mysqli_fetch_row($result)) // used while loop to read the data from the table
      print_r($row)
    /*
     * Array ( [0] => 1 [1] => nafis [2] => Pokemon1234 ) Array ( [0] => 3 [1] => nafis [2] => sss ) Array ( [0] => 4 [1] => xmen [2] => submit ) Array ( [0] => 5 [1] => kratos [2] => atreus )
     * eveyrhimg showed up in assoisatve array format
     */
    ?>

</div>
<?php include ("INC/footer.php")?>