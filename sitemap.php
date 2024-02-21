<?php

header("Content-Type: application/xml; charset=utf-8");

$domain = "skiyen.rf.gd/";
$ssl = "http://";
$base_url = $ssl.$domain;

?>
<?php

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;


include("gen_conn.php");
$query = "SELECT page_url FROM sitemap ORDER BY page_id DESC";
$data = mysqli_query($conn,$query);

if($data){

while($row = mysqli_fetch_assoc($data)){
echo '<url>' . PHP_EOL;
echo '<loc>'.$base_url.$row['page_url'].'</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;
}

}else{

echo '<url>' . PHP_EOL;
echo '<loc>http://skiyen.rf.gd</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;

}

echo '</urlset>';



?>