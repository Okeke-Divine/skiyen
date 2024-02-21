<?php
    $i1 = "";
    $i2 = "";
    $i3 = "";
    $ii = "dsfosdkf";
    if($ns == "u"){
      $i1 = $ii;
    }else if($ns == "g"){
      $i2 = $ii;
    }
    else if($ns == "f"){
      $i3 = $ii;
    }
?>
<!-- oninput="ssjhfig8();" -->
<br>

    <form action="../search" autocomplete="off">
    		<input  type="text" name="zqq" id="search_word" class="def_search form-control" placeholder="Search..." value="<?php echo $item; ?>">
    		<input type="hidden" name="ns" value="<?php echo $ns; ?>">

    		<button onclick="start_search()" data-tooltip="Search" type="button" class="btn btn-primary tooltip_ski" style="height: 37px;position: relative;top:-4px;"><i class="fa fa-search"></i></button>
			<!-- <div id="search_suggestions_div" class="search_suggestions_div"></div></center> -->
    		<button type="submit" class="hiden_ssss">.</button>
    </form>
    	
<br>




<div class="wd100 navbar white br-5 text-dark p-1 wo_box_shadow">
	 <button class="btn btn text-left <?php echo $i1; ?>" onclick="search_from('u');"><i class="fa fa-user"></i> Users</button>
      <button class="btn btn text-left <?php echo $i2; ?>" onclick="search_from('g');"><i class="fa fa-users"></i> Groups</button>
      <button class="btn btn text-left <?php echo $i3; ?>" onclick="search_from('f');"><i class="fa fa-comment-alt"></i> Forum</button>
</div>

<?php
	include("main.php");
?>