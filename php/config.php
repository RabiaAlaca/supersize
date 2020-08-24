<?php

$items = mysqli_fetch_array(mysqli_query("select * from where id ='1'"));
$ID = $items['ID'];
$items_Price = $items['items_Price'];
$items_Name = $items['items_Name'];
$items_Brand =  $items['items_Brand'];

echo "<h1>ID</h1>>";
echo "<br>";
echo "<h2>items_Price</h2>";
echo "<h2>items_Name</h2>";
echo "<h2>items_Brand</h2>";



?>

