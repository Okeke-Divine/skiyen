<br>
  <span class="pos_link" style="cursor: pointer;" onclick="window.location = '../followers/?sdfgsdfg=sdfgsdfgsdfg&&sdgjsdigjsdigsd=<?php echo $my_id; ?>&&sdfgsdfg=<?php echo $my_uname; ?>&&sdfhgudsf8g7s9dfghsdfghs9df';">
        
        Followers  <?php

          $chk_follow = mysqli_query($conn,"SELECT * FROM $followers WHERE following = '$ses_id'");

          if(mysqli_fetch_assoc($chk_follow)){
            $chk_follow1 = mysqli_query($conn,"SELECT * FROM $followers WHERE following = '$ses_id'");
            $foll = 0;
            while($fol = mysqli_fetch_array($chk_follow1)){
              $foll = $foll+1;
              global $foll;
            }
            echo $foll;
          }else{
            echo "0";
          }

          ?>

</span>
 | 
<span class="pos_link" style="cursor: pointer;" onclick="window.location = '../following/?sdfgsdfg=sdfgsdfgsdfg&&sdgjsdigjsdigsd=<?php echo $my_id; ?>&&sdfgsdfg=<?php echo $my_uname; ?>&&sdfhgudsf8g7s9dfghsdfghs9df';">
         Following <?php

          $chk_follow1 = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id'");

          if(mysqli_fetch_assoc($chk_follow1)){
            $chk_follow11 = mysqli_query($conn,"SELECT * FROM $followers WHERE user_id = '$ses_id'");
            $foll1 = 0;
            while($fol = mysqli_fetch_array($chk_follow11)){
              $foll1 = $foll1+1;
              global $foll1;
            }
            echo $foll1;
          }else{
            echo "0";
          }

          ?>

      </span>