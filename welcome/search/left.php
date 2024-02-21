  <div class="my-3 p-3 rounded shadow-sm" style="">
  <h6 class="border-gray pb-2 mb-0" style="height:10px!important;"></h6> 
      <div class="media-body pb-3 mb-0 small lh-125 border-gray">
    

        <?php
        $i1 = "";
        $i2 = "";
        $i3 = "";
        $ii = "btn-primary";
        if($ns == "u"){
          $i1 = $ii;
        }else if($ns == "g"){
          $i2 = $ii;
        }
        else if($ns == "f"){
          $i3 = $ii;
        }

        ?>

      <button class="btn btn text-left <?php echo $i1; ?>" onclick="search_from('u');" style="width: 250px;">Users</button>
      <button class="btn btn text-left <?php echo $i2; ?>" onclick="search_from('g');" style="width: 250px;">Groups</button>
      <button class="btn btn text-left <?php echo $i3; ?>" onclick="search_from('f');" style="width: 250px;">Forum</button>

</div>
</div>