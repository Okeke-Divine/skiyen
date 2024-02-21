 <?php

 		include("../conn.php");

        $d = mysqli_query($conn,"SELECT * FROM $do_you_know ORDER BY RAND() LIMIT 1");
        while($dyk = mysqli_fetch_array($d)){
          echo "<div class='mt-2'>".$dyk['do_you_know']."</div>";
        }

      ?>  