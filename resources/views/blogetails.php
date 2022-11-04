<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="/blog/">Quick Blogger</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/blog/">All blogs</a></li>
      <li><a href="#">Add Blogs</a></li>
    </ul>
  </div>
</nav>



<center>
<div class="card" style="padding:10px;margin:10px;width:500px;border:2px solid blue">
  <div class="card-body">
    <h3 class="card-title">Name: <?php echo $blog['name'];?></h1>
    <p class="card-text">Description: <?php echo $blog['Description'];?></p>
    <p class="card-text">Created Date: <?php echo $blog['created_at'];?></p>
    <p class="card-text">Created Date: <?php echo $blog['updated_at'];?></p>
  </div>
</div>
</center>

</body>
</html>
