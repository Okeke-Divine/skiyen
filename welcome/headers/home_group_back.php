 <?php
$setted_group = $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line'];

            $query_info = "SELECT * FROM $groups WHERE name = '$setted_group'";
$data_info = mysqli_query($conn,$query_info);

if($data_info){
  while($row_info = mysqli_fetch_array($data_info)){
    $group_name = $row_info['name'];
    $null = $row_info['name'];
    $group_id = $row_info['id'];
    global $group_id;
    $group_des = $row_info['description'];
    $group_sec = $row_info['security'];
    $group_owner = $row_info['owner'];
    global $group_owner;
    $_SESSION['current_group_skiyen_inovec_drt454334rtrefgjfg7dfghagh8sghs_end_line_owner'] = $group_owner;
    $group_tc = $row_info['time_created'];
    $group_dc = $row_info['date_created'];
    $views = $row_info['views'];
    global $views;
    $group_picture = $row_info['group_picture'];
}
}
    ?>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<header>
        <nav_skiyen>
            <ul>
                <li> <button onclick="window.history.back();" id="search_btn" class="tooltip_ski" data-tooltip="Back"> <i class="fas fa-chevron-circle-left"></i> </button> </li>
                
                <li id="space2"></li>
                
                <span style="margin-top: 10px;"><?php echo $null; ?></span>

                <li id="space2"></li>


                </ul>
                </nav_skiyen>
           </header>
 