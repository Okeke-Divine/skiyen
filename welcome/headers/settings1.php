<?php

include("head2.php");
include("style.php");

?>
<header>
        <nav_skiyen>
            <ul>
                <li> <button onclick="window.location = '<?php echo $search; ?>.php';" id="search_btn" class="tooltip_ski" data-tooltip="Search"> <i class="fas fa-search    "></i> </button> </li>
                
                <li id="space2"></li>
                
                <li> <a class="tooltip_ski" data-tooltip="Home" href="<?php echo $home; ?>.php" id="home"> <i class="fas fa-home"></i> </a> </li>
                <li> <a class="tooltip_ski" data-tooltip="Find people" href="<?php echo $find_people; ?>.php" id="group"> <i class="fas fa-user-friends    "></i> </a></li>
             
                <li> <a class="tooltip_ski active_ski" data-tooltip="Menu" href="<?php echo $settings; ?>.php" id="friend"> <span style="font-size: 30px;">&#9776;</span> </a> </li>
                <li id="space1"></li>
              <?php

              include("noti_tab.php");

              ?>
                
                <li>  <button class="tooltip_ski" onclick="window.location = '<?php echo $my_profile; ?>.php';" data-tooltip="My Profile" id="btn_profile"><i class="fas fa-user-cog    "></i></button>  </li>
            </ul>
        </nav_skiyen>
    </header>




