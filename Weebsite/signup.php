<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
   <title>Contest Entry Form</title>
<style type="text/css">
<?php 
include('signup.css');
?>
</style> 

</head>

<body>



<form action="" method="post">

<h2>Custom Sneaker Order Form</h2>

<ul>
<li><label for="form-name">Name:</label> <input type="text" name="username" id="form-name" class="textinput"></li>
<li><label for="form-email">Email:</label> <input type="email" name="emailaddress" id="form-email"class="textinput"></li>
<li><label for="form-tel">Telephone:</label> <input type="tel" name="telephone" id="form-tel"class="textinput"></li>
<li><label for="form-story">Tell us about yourself:</label> <textarea name="story" maxlength="600" id="form-story" placeholder="No more than 600 characters long"></textarea></li>
<li>
<label for="sizes">Size:</label>
<select name="size" id="sizes">
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
</select> <em>Sizes reflect standard US men's sizes</em>
</li>

<li>
<label for="colors">Sneaker Color:</label>
<fieldset id="colors">
<legend>Color</legend>
  <ul>
  <li><label><input type="radio" name="color" value="red"> Red</label> </li>
  <li><label><input type="radio" name="color" value="blue"> Blue</label> </li>
  <li><label><input type="radio" name="color" value="black"> Black</label> </li>
  <li><label><input type="radio" name="color" value="silver"> Silver</label> </li>
  </ul>
</fieldset>
</li>

<li>
<label for="features">Add-on Features:</label>
<fieldset id="features">
<legend>Feature</legend>
  <ul>
  <li><label><input type="checkbox" name="feature" value="laces"> Sparkley laces</label></li>
  <li><label><input type="checkbox" name="feature" value="logo" checked> Metallic logo</label></li>
  <li><label><input type="checkbox" name="feature" value="heels"> Light-up heels</label></li>
  <li><label><input type="checkbox" name="feature" value="mp3"> MP3-enabled</label></li>
  </ul>
</fieldset>
</li>
<li class="buttons"><input type="submit" value="ENTER"></li>

</ul>

</form>
</body>
</html>
