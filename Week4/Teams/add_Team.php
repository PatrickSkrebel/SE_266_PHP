
<?php


    function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }


    ini_set('display_errors', 1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    include __DIR__ . "/model/model_team.php";

    $error ="";
    $teamName = "";
    $division = "";

    if(isset($_POST['storeTeam'])){
        $teamName = filter_input(INPUT_POST, 'team_name');
        $division = filter_input(INPUT_POST, "division");
        var_dump($teamName);

        if($teamName =="")$error .= "<li>Please Provide Team Name</li>";
        if($division =="")$error .= "<li>Please Provide Division Name</li>";
    }

    if(isset($_POST['storeTeam']) && $error ==""){
        addTeam($teamName, $division);
    }  
    
    if (isPostRequest()) {
    $team = filter_input(INPUT_POST, 'team_name');
    $division = filter_input(INPUT_POST, 'division');
    $result = addTeam ($team, $division);    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php
        if(isset($_POST['storeTeam']) && $error ==""):
    ?>
        <h2> Team was add</h2>

        <ul>
            <li><?php echo "Team Name: $teamName"; ?></li>
            <li><?php echo "Diviison: $division"; ?><li>
        </ul>
        <a href="view_team.php">View All NFL Teams</a>
    <?php
        endif;
    ?>

    <h2>Add New NFL Team</h2>

    <form name="team" method="POST">

    <div class="wrapper">
        <div class="label">
            <label>Team Name:</label>
        </div>
        <div>
            <input type="Text" name="team_name" value="<?php $teamName;?>"/>
        </div>
        <div class="label">
            <label>Division:</label>
        </div>
        <div>
            <input type="Text" name="division" value="<?php $division;?>"/>
        </div>


        <div>
            &nbsp;
        </div>

        <div>
            <input type="submit" name="storeTeam" value="Save New Team Information"/>

        </div>
    </div>
    </form>
</body>
</html>