<?php
// if (isset($_POST['submit'])) {




  $username = $_POST['username'];
  $password = $_POST['password'];
  //
  // if ($username && $password) {
  //   echo $username . $password;
  // } else {
  //   echo "Nope, not set";
  // }

  // echo $username . $password;
// }

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

// Testing to see if the database connected
if ($connection) {
  echo "We are connected";
} else {
  die("Database didn't connect");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha   384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container">
      <div class="col-sm-6">
        <form class="" action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">

          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">

          </div>

          <input type="submit" name="submit" value="Submit" class="btn btn-info">

        </form>
      </div>
    </div>

  </body>
</html>
