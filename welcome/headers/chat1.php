<?php
//large-scr-only
include("head2.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php

include("top_nav.php")

?>
<nav class="navbar nab bg-light">

   <a href="<?php echo $home; ?>.php" class="link_def_one_sk">
    
    <?php

    echo $url1;

    ?>

   </a>
   <a href="<?php echo $my_profile; ?>.php" class="link_def_one_sk">
    <?php echo $url2; ?>
   </a>
   <a href="<?php echo $chat; ?>.php" class="link_def_one_sk active_link"><?php echo $url3; ?></a>

   <a href="<?php echo $post; ?>.php" class="link_def_one_sk"><?php echo $url4; ?></a>
   <a href="<?php echo $search; ?>.php" class="link_def_one_sk"><?php echo $url5; ?></a>

   <a href="<?php echo $settings; ?>.php" class="link_def_one_sk"><?php echo $url6; ?></a>
 </nav>