<?php

if(isset($_POST['idless'])){
    $id1 = $_POST['idless'];
    $delete = mysqli_query($conn,"DELETE FROM $sitemap WHERE page_id = '$id1' LIMIT 1");

}

if(isset($_POST['url'])){
    $url = $_POST['url'];
    $title = $_POST['title'];
    $url = mysqli_real_escape_string($conn,$url);
    $title = mysqli_real_escape_string($conn,$title);

$cq = "SELECT * FROM $sitemap WHERE page_url = '$url'";
$cd = mysqli_query($conn,$cq);

    if(mysqli_fetch_assoc($cd)){
        echo "link already exitst";
    }else{

    $query_in = "INSERT INTO $sitemap VALUES ('','$title','$url')";
    $data_in = mysqli_query($conn,$query_in);


}
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
                                    <div>Skiyen | Site Map
                                        <div class="page-title-subheading">
                                            This is the sitemap of skiyen.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="">
    <span id="search_result_number"></span> links found
</div><br>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
<span>

</span>
<br>
<br>
<form method="POST">
    <input class="form-control" style="height: 50px;" type="text" placeholder="dir/url" name="url" required=""><br>
    <input class="form-control" style="height: 50px;" type="text" placeholder="title" name="title" required=""><br>
    <input class="btn btn-primary btn-block" style="width: 100%;" type="submit" value="Add +">
</form>

<br>
<br>
<?php

$query = "SELECT * FROM sitemap ORDER BY page_id DESC";
$data = mysqli_query($conn,$query);



$all_ids = 0;

while($row = mysqli_fetch_assoc($data)){
$id = $row['page_id'];
$ulla = $row['page_url'];
 $all_ids += 1;
  echo "<script>
  document.getElementById('search_result_number').innerHTML = '$all_ids';
  </script>";


?>
<div class="jumbotron">
    <span><?php echo $id; ?></span><br>
    <span><a href="http://skiyen.rf.gd/<?php echo $ulla; ?>" target="_blank">http://skiyen.rf.gd/<?php echo $ulla; ?></a></span><br>
    <form action="" method="post">
        <input type="text" readonly="" name="idless" value="<?php echo $id; ?>">
        <button class="btn btn-secondary">delete</button>
    </form>
</div>
<?php

}

?>
<style type="text/css">
    span{
        color: black;
    }
.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 2rem 1rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

</style>
                        </div>
                    </div>
                </div>
