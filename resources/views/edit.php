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

<form action="blog/<?php echo $blog['id']?>" method="POST" style="padding:10px;margin:10px;width:500px;border:2px solid blue">
<div class="form-group" >
    <label for="">Name</label>
    <input type="text" class="form-control" id="name" placeholder="name" name="name" value="<?php echo $blog['name'];?>">
</div>
<div class="form-group">
    <label for="">Description</label>
    <input type="text" class="form-control" id="desc" placeholder="description" name="disc" value="<?php echo $blog['Description'];?>">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>
