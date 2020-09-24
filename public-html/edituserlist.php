<?php
session_start();
include "../resources/src/user.php";

use db\user as user;

if (isset($_SESSION["logged_in"])) {
  if ($_SESSION["admin"] == "user") {
    header("LOCATION: userdash.php");
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<?php include 'admindash.php'; ?>

<body>
  <table>
    <tr>
      <th>User Numner</th>
      <th>User Name</th>
      <th>User Password</th>
      <th>Email</th>
      <th>Type</th>
      <th>Change Type</th>
      <th>Edit Operation</th>
    </tr>
    <?php
    $k = new user;
    $k->user_info();
    ?>
  </table>

</body>

</html>