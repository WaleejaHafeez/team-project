<?php
$projectName = "Our Master Piece";
$projectDescription = "Our Master Piece is an online art gallery and community platform where artists, art enthusiasts, and collectors converge. The website showcases stunning artworks, facilitates meaningful connections, and fosters creativity.

";
$groupMembers = array(
  array("name" => "Dua Kiran Faraz S002", "role" => "Team Lead"),
  array("name" => "Waleeja Hafeez S049", "role" => "Designer"),
  array("name" => "Sana Jabbar S030", "role" => "Developer")
);
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $projectName; ?></title>
  <style>
    body { font-family: Arial, sans-serif; }
    .container { width: 80%; margin: 40px auto; }
    .member { margin-bottom: 20px; }
  </style>
</head>
<body>
  <div class="container">
    <h1><?php echo $projectName; ?></h1>
    <p><?php echo $projectDescription; ?></p>
    <h2>Group Members:</h2>
    <ul>
      <?php foreach ($groupMembers as $member) { ?>
        <li class="member">
          <strong><?php echo $member['name']; ?></strong>
          <span><?php echo $member['role']; ?></span>
        </li>
      <?php } ?>
    </ul>
  </div>
</body>
</html>
