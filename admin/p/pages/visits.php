<?php
if(isset($_GET['lim'])){
    $lim = $_GET['lim'];
    if(empty($lim)){
        $lim = 10;
    }
}else{
    $lim = 10;
}
?>
 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-voicemail icon-gradient bg-arielle-smile">
                                        </i>
                                    </div>
                                    <div>Page Visits
                                        <div class="page-title-subheading">
                                            Page visits on skiyen is as follows
                                            <form method="GET">
                                                <input type="hidden" name="page" value="<?php echo $page; ?>">
                                                <input type="text" name="lim" value="<?php echo $lim; ?>">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php

$query = "SELECT * FROM $views";
$data = mysqli_query($conn,$query);



$total_views = 0;
while ($row = mysqli_fetch_array($data)){
    $view = $row['views'];
    $total_views += $view;
    global $total_views;
}
?>
<h1>There are <?php echo $total_views; ?> page view(s).</h1>
<h3>And there are as follows</h3>
<h4>The time shown bellow was the users device time</h4>
<ul>

<?php

$query1 = "SELECT * FROM $views ORDER BY id DESC LIMIT 0,{$lim}";
$data1 = mysqli_query($conn,$query1);

$total_views = 0;
while ($row = mysqli_fetch_array($data1)){
    $view = $row['views'];
    $uname = $row['username'];
    $time = $row['unix'];
    ?>
        <li><?php echo $uname; ?> - <?php echo date("Y/m/d"." - "."h:i:sa:",$time); ?></li><br>
    <?php
}
?>
</ul>
<style type="text/css">
    html,body{
        word-wrap: break-word;
    }
</style>
                    </div>
                </div>
