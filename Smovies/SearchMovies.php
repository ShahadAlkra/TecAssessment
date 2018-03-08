<!DOCTYPE html>
<html lang="en">
<head>
<title>SMovies</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="FPlayout.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<?php
 
  include_once "navi.php";
?>

<form action="search.php" method="get">
<div class="container">
    <h1>Search</h1>
    <p>type the title of the movie.</p>
    <hr>
      <input type="text" name="search" placeholder="type title her" required/>
	   <div class="clearfix">
	  <input type="submit" value="search" class="search_button"/><br/>	
</div>	
</div>  
</form>
 <div class="container">
 <ul>
      <li>
        <a href="latest.php">Latest Movies
        </a>
      </li>
      <li>
        <a href="movieDetails.php">search movie with detailes
        </a>
      </li>

    </ul>
	</div>

<?php
 
  include_once "footer.php";
?>

</body>
</html>
