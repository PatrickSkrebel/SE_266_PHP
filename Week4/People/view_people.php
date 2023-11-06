<?php

    include __DIR__ . "/model/model_people.php";

    $people = getPeople();
?>

<html lang="en">
<head>
  <title>View Patients</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">

    <div class="col-sm-offset-2 col-sm-10">
        <h1>People Form</h1>

        <br />
        <!-- ---------------------- -->
        <a href="add_people.php">Add Person</a>
         <!-- Begin table of teams -->
         <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Married</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($people as $p): ?>
            <tr>
                <td><?= $p['id'];?></td>
                <td><?= $p['firstName'];?></td>
                <td><?= $p['lastName'];?></td>
                <td><?= $p['birthdate'];?></td>
                <td><?= $p['height'];?></td>
                <td><?= $p['weight'];?></td>
                <td><?= $p['married'];?></td>
                <td><a href="edit_people.php?action=Update&teamId=<?= $p['id']; ?>">Edit</a></td>        
            </tr>
        <?php endforeach; ?>
        
        </table>

        </br>
        <a href="edit_people.php?action=Add">Add New Team</a>
    </div>
    </div>
</body>
</html>