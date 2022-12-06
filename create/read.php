
<?php include_once('functions.php'); ?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4 offset-md-4 pt-3 form-div">

            <form action="functions.php" method="post" enctype="multipart/form-data">
                <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Upload image</h4>
              </div>
              <img src="avatar.jfif" onClick="triggerClick()" id="profileDisplay">
            </span>
                    <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
                    <label>Profile Image</label>
                </div>
                <div class="form-group">
                    <label>name</label>
                    <input name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="save_profile" class="btn btn-primary btn-block">Save User</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function triggerClick(e) {
        document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
</script>

</body>
</html>
