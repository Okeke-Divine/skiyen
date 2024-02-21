<?php

  if(isset($_GET['entry'])){
    $post_entry_point = $_GET['entry'];
    if($post_entry_point == 'image'){
      ?>
      <script type="text/javascript">
        file1.click();
        post_type_click('post_camera','image');
      </script>
      <?php
    }
  }

?>