<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PATRIOT'S CLUB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Stint+Ultra+Expanded" rel="stylesheet">
<link rel="icon" type="image/png" href="images/favicon.png">
<style>
<?php
include('products.css');
?>
</style>
</head>

<body>
<div id="container">
<header>
<nav>
<div id="nav">
  <ul>
    <li><a href="home.php" >Home</a></li>
    <li><a href="">Our Story</a><li>
	<li><a href="products.php">Armory</a></li>
	<li><a href="">Hours & Location</a><li>
    <li><a href="">LOGIN / Register</a></li>
	<li><a href="">Cart</a></li>
	<li><div id="search"><form action="search.php" method="post">
	     <input placeholder="Search Weapons..." id="search_bar" type="text" name="search_products">
		 <input id="search_btn" type="submit" value="Search"></form>
	</div></li>

  </ul>
  </div>
</nav> 
<div id="logo"> 
    <a href="home.php"><img id="img" src="images/logo.jpg" alt="logo" height="200px" width="auto"></a>
  </div> 
<h1><!--Robust--></h1>
</header>


<div id="p2" class="strip">
<p><span class="p1">Categories</span></p>
</div>

<div id="c2">
<div id="categories">

<?php include('php/database_funcs.php');

$categories=get_categories();
foreach($categories as $category)
{
	echo "<br><a href="."list_products.php?action=list_products&category_id=".$category['id']. " class=\"btn\" style=\"color:black; \">".$category['name']."</a><br>";

}
?>
</div>
</div>

<footer>
<p><span id="footer">COPYRIGHT &copy; 2021, PATRIOT'S CLUB</span></p> 
</footer>
</div>
</body>
</html>
