<?php include_once('functions.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<body>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Applicants View Details
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php foreach($user as $item): ?>

                        <div class="mb-3">
                            <label>No.</label>
                            <p class="form-control">
                                <?=$item['id'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <p class="form-control">
                                <?=$item['username'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <p class="form-control">
                                <?=$item['email'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>member</label>
                            <p class="form-control">
                                <?=$item['radio'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Therapy certificate</label>
                            <p class="form-control">
                                <img src="<?php echo 'images/'. $item['image']; ?>" width='600' height='600'>
                            </p>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


