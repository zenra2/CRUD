<?php include 'Database/Database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Library </title>
  <link href="statics/css/bootstrap.min.css" rel="stylesheet">
  <script src="statics/js/bootstrap.js"></script>
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
      <div class="col-6">
        <div class="row">
          <p class="display-5 fw-bold">Books admission </p>
        </div>
        <div class="row">
          <a href="views/add_lib.php" class="btn btn-outline-dark btn-sm" style="background-color: greenyellow;">Add books</a>
        </div>
        <?php
          $res = $conn->query("SELECT * FROM lib");
        ?>
        <?php if($res->num_rows > 0): ?>
            <?php while($row = $res->fetch_assoc()): ?>
            <div class="row border rounded p-3 my-3">
                <div>
                <h5 class="fw-bold"><?= $row['title']; ?></h5>
                <p class="text-secondary"><?= $row['description']; ?></p>
                <p class="fw-bold"> Status: </p>
                <p class="fw-bold">
                    <small> 
                    <?= $row['status'] == 0 ? "Borrowed" : "Returned"; ?> 
                    </small>
                </p>
                <div class="row my-1">
                    <a href="views/update_lib.php?id=<?=$row['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                </div>
                <div class="row my-1">
                    <a href="handlers/delete_library_handler.php?id=<?=$row['id'];?>" class="btn btn-sm btn-danger">Delete</a>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="row border rounded p-3 my-3 text-center">
                <div class="col mt-3">
                    <p class="text-muted"> No Current Books on the list.</p>
                </div>
            </div>
      <?php endif; ?>
      </div>
    </div>
</body>

</html>

