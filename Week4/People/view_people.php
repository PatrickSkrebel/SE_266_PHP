<?php

    include __DIR__ . "/model/model_people.php";

    $people = getPeople();
?>

<html lang="en">
<head>
  <title>View People Forms</title> 
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
        <a href="add_Person.php"> Add Person</a>
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
            </tr>
        </thead>
        <tbody>

        <?php foreach ($teams as $t): ?>
            <tr>
                <td><?= $t['id'];?></td>
                <td><?= $t['firstName'];?></td>
                <td><?= $t['lastName'];?></td>
                <td><?= $t['birthdate'];?></td>
                <td><?= $t['height'];?></td>
                <td><?= $t['weight'];?></td>
                <td><?= $t['married'];?></td>
            </tr>
        <?php endforeach; ?>
        
        </table>

        </br>
      
    </div>
    </div>
</body>
</html>