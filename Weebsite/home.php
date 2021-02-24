<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PATRIOT'S CLUB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Stint+Ultra+Expanded" rel="stylesheet">
<link rel="icon" type="image/png" href="images/favicon.png">
<style>

<?php include('home.css'); ?></style>
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
<h1><!--cont.--></h1>
</header>


<div id="p2" class="strip">
<p><span class="p1">Sniper Rifles</span></p>
</div>

<div id="c2">
<div id="end2">
<span id="end"><br><br><br><br><br><br><br><br><br><br><br>
</span><br><br>
</div>
<div id="d1" style="color:white;">
<a href="list_products.php?category_id=2" class="btn" style="color: black;">ORDER NOW</a>
</div>
</div>



<div id="p3" class="strip">
<p><span class="p1">Assault Rifles</span></p>
</div>

<div id="c3">
<div id="end2">
<span id="end"><br><br><br><br><br><br><br><br><br><br><br>
</span><br><br>
</div>
<div id="d1" style="color:white;">
<a href="list_products.php?category_id=1" class="btn" style="color: black;">ORDER NOW</a>
</div>
</div>



<div id="p4" class="strip">
<p><span class="p1">Guns</span></p>
</div>

<div id="c4">
<div id="end2">
<span id="end"><br><br><br><br><br><br><br><br><br><br><br>
</span> <br><br>
</div>
<div id="d1" style="color:white;">
<a href="list_products.php?category_id=3" class="btn" style="color: black;">ORDER NOW</a>
</div>
</div>



<div id="p5" class="strip">
<p><span class="p1">Ammunition</span></p>
</div>

<div id="c5">
<div id="end2">
<span id="end"><br><br><br><br><br><br><br><br><br><br><br>
</span><br><br>
</div>
<div id="d1" style="color:white;">
<a href="list_products.php?category_id=4" class="btn" style="color: black;"><nobr>ORDER NOW</nobr></a>
</div>
</div>



<footer>
<p><span id="footer">COPYRIGHT &copy; <?php echo date('Y'); ?>, PATRIOT'S CLUB</span></p> 
</footer>
</div>
</body>
</html>
