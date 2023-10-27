<?php
    include __DIR__ . "/model/model_people.php";
// define variables and set to empty values
$fNameErr = $lNameErr = $marriedErr = $birthdateErr = $heightErr = $weigthErr = "";
$fName = $lName = $married = $birthDate = $height = $weight = "";

$fBool = false;
$lBool = false;
$mBool = false;
$hBool = false;
$wBool = false;
$bBool = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First name check
  if (empty($_POST["fName"])) {
    $fNameErr = "* First name is required";
  } else {
    $fName = test_input($_POST["fName"]);
    $fBool = true;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fName)) {
      $fNameErr = "Only letters and white space allowed";
    }
  }

  // Last day check
  if (empty($_POST["lName"])) {
    $lNameErr = "* Last name is required";
  } else {
    $lName = test_input($_POST["lName"]);
    $lBool = true;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lName)) {
      $lNameErr = "Only letters and white space allowed";
    }
  }

  // Birthday check
  if (empty($_POST["birthDate"])) {
    $birthdateErr = "* Birthday is required";
  } else {
    $birthDate = test_input($_POST["birthDate"]);
    $bBool = true;
    // check if name only contains letters and whitespace
    if (!preg_match("/^\d{4}-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01])$/",$birthDate)) {
      $birthdateErr = "ex: 0000-0-0";
    }
  }
    
  // Height check
  if (empty($_POST["height"])) {
    $heightErr = "* Height is required";
  } else {
    $height = test_input($_POST["height"]);
    $hBool = true;
    // check if name only contains letters and whitespace
    if (!preg_match('/\'(\d+)\'(\d+)"/',$height)) {
      $heightErr = "5'11";
    }
  }

  // Weight Check
  if (empty($_POST["weight"])) {
    $weigthErr = "* Weight is required";
  } else {

    $weight = test_input($_POST["weight"]);
    $wBool = true;

    if($weight > 800)
    {
        $weigthErr = "* Weight to high";
    }
  }

  // Married Check
  if (empty($_POST["married"])) {
    $marriedErr = "* Marriage is required";
  } else {
    $married = test_input($_POST["married"]);
    $mBool = true;
  }

  if($bBool && $fBool && $lBool && $mBool && $wBool && $hBool == true)
  {
    addPeople ($fName, $lName, $birthDate, $height, $weight, $married);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
<h2>Person Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="fName" value="<?php echo $fName;?>">
  <span class="error"><?php echo $fNameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lName" value="<?php echo $lName;?>">
  <span class="error"><?php echo $lNameErr;?></span>
  <br><br>
  Married:
  <input type="radio" name="married" <?php if (isset($married) && $married=="yes") echo "checked";?> value="yes">Yes
  <input type="radio" name="married" <?php if (isset($married) && $married=="no") echo "checked";?> value="no">No
  <span class="error"><?php echo $marriedErr;?></span>
  <br><br>
  Birthday: <input type="text" name="birthDate" value="<?php echo $birthDate;?>">
  <span class="error"><?php echo $birthdateErr;?></span>
  <br><br>
  Height: <input type="text" name="height" value="<?php echo $height;?>">
  <span class="error"><?php echo $heightErr;?></span>
  <br><br>
  Weight: <input type="text" name="weight" value="<?php echo $weight;?>">
  <span class="error"><?php echo $weigthErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<a href="view_people.php">View Patients</a>

</body>
</html>