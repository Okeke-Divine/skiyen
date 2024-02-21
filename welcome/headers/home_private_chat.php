<!--        <?php


if(isset($skiyen_rec_pp)){
    if(!empty($skiyen_rec_pp)){
?>
<div class="hrz1">
    <img src="../all_user_profile_pic/<?php echo $skiyen_rec_pp; ?>" class="chat_png1">
</div>
<?php
    }
}

?> -->

<?php

include("head.php");
include("style.php");
$ses_rec_unamet = $ses_rec_uname;
    if(strlen($ses_rec_uname) > 10){
        $ses_rec_unamet = substr($ses_rec_unamet, 0,10)."..";
        $ses_rec_unamet = $ses_rec_uname;
    }else{
        $ses_rec_unamet = $ses_rec_uname;
    }
?>
<!-- <header>
        <nav_skiyen style="position: fixed;width: 100%;z-index: 20;background: white;">
            <ul>
                <li> <button onclick="window.history.back()" id="search_btn" class="tooltip_ski" data-tooltip="Back"> <i class="fas fa-chevron-circle-left"></i> </button> </li>

                <li id="space1"></li>
                        <div class="prz">
                        <img src="../all_user_profile_pic/<?php echo $ses_rec_pp; ?>" alt="<?php echo $ses_rec_uname; ?>" class="chat_png">
                    </div>
                <li> <span class="chat_top_nav_text pointer" onclick="window.location = '../profile/?view=<?php echo $ses_rec_unamet; ?>';"> 
                    
                    <?php echo $ses_rec_unamet; ?>
                </span> </li>


                <li id="space1"></li>
                

                ///comment me out later <li>  <button class="btn btn nav_btn_one" onclick="window.location = 'settings';"> 
                    <i class="mt-1 fa fa-ellipsis-v"></i>
                </button>  </li> 
                //till here

            </ul>
        </nav_skiyen>
    </header> -->

<div class="site_loader-on-navbar" id="sitelon">
  <div class="inner-loader"></div>
</div>
<div class="skiyen-private-chat-navbar">
    <button class="skiyen-navbar-chat-btn" onclick="goto('../skiyen_commincation/');"><i class="fa fa-chevron-circle-left text-light"></i></button>
    <img src="../all_user_profile_pic/<?php echo $ses_rec_pp; ?>" alt="<?php echo $ses_rec_uname; ?>'s profile picture on skiyen" class="skiyen-navbar-chat-img">
    <div class="skiyen-navbar-username"><b><?php echo $ses_rec_unamet; ?></b></div>

    <div class="skiyen-private-chat-navbar-icons">
        <i onclick="goto('#phone');" class="fa fa-phone-alt text-light pointer"></i>
        <i onclick="goto('#video');" class="fa fa-video text-light pointer"></i>
        <i onclick="load_user_info();" class="fa fa-info-circle text-light pointer"></i>
        <i onclick="load_user_settings();" class="fa fa-cog text-light pointer"></i>
    </div>
</div>


