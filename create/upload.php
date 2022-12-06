<?php include_once('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="">
</head>
<body>

<form action="functions.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>name</label>
        <input name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>email</label>
        <input name="email" class="form-control" required>
    </div>
    <div class="form-group">
    <input type="radio" id="html" name="radio" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="radio" value="CSS">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="radio" value="JavaScript">
    <label for="javascript">JavaScript</label>
    </div>

    <input type="file" name="image" id="profileImage"  required accept='image/*'>
    <label>Profile Image</label>
    <div class="form-group">
        <button type="submit" name="save_profile" class="btn btn-primary btn-block">Save User</button>
    </div>


</form>

<script src="https://gumroad.com/js/gumroad.js"></script>
<a class="gumroad-button" href="https://sekanitherapy.gumroad.com/l/cxfgx" data-gumroad-overlay-checkout="true">pay on </a>


</body>
</html>

