<?php

   $con= mysqli_connect("localhost","maymaays","ltolpxAjR7PHQPYO","Hotel Management");

   if (mysqli_connect_errno())
   {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   // Perform a query, check for error

   if (!mysqli_query($con,"select * From `Hotel` Where hotelID like 5012"))
   {
        echo("Error description: " . mysqli_error($con));
   }

   mysqli_close($con);

?>
