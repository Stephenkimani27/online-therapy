
<?php include_once('functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="log.css" />
</head>
<body>
<section class="contact">
    <div class="container">
        <h1 class="form-title">Application</h1>
        <form action="functions.php" method="post" enctype="multipart/form-data">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text"
                           id="fullName"
                           name="username"
                           placeholder="Enter Full Name"/>
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Enter Email"/>
                </div>
                <br><br><br><br><br><br>
            <div class="gender-details-box">
                <span class="gender-title">have registered with kenya counselling and psychological association</span>
                <div class="gender-category">
                    <input type="radio" name="radio" id="male">
                    <label for="male">yes</label>
                    <input type="radio" name="radio" id="female">
                    <label for="female">No</label>

                </div>
            </div>

                <input type="file" name="image" id="profileImage"  required accept='image/*'>
                <label>licence certificate screenshot</label>
            <div class="form-submit-btn">
                <button type="submit" name="save_profile" class="button">submit</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
