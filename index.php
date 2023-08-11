<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <div class = "row justify-content-center">
    <form action="" method="POST">
      <div class = "form-group">
      <label> Name </label>
      <input type="text" name="name" class="form-control" value="Enter your name">
      </div>
      <div class = "form-group">
      <label> Location </label>
      <input type="text" name="location" class="form-control" value="Enter your location">
      </div>
      <div class = "form-group">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
      </div>
    </form>
    </div>

  </body>
</html>