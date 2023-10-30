<?php
    session_start();

    

    if (!isset($_SESSION['currentValue'])) {
        $_SESSION['currentValue'] = 1000; // Set the initial value
    }   
    if (!isset($_SESSION['savingValue'])) {
        $_SESSION['savingValue'] = 5000; // Set the initial value
    }
  

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["checkingOP"])) {
            $value = $_POST["checkingValue"];
            $operation = $_POST["checkingOP"];

            $currentValue = $_SESSION['currentValue'];
    
            if ($operation === "add") {
                // Add the posted value to the stored value
                $currentValue += $value;
            } elseif ($operation === "subtract") {
                // Check if the withdrawal amount exceeds the available balance
                if ($value > $currentValue) {
                    $result = "Insufficient funds for withdrawal.";
                } else {
                    $currentValue -= $value;
                }
            } else {
                $result = "Invalid operation";
            }
            
            $_SESSION['currentValue'] = $currentValue;
        } 

        if (isset($_POST["savingOP"])) {
            $value = $_POST["savingValue"];
            $operation = $_POST["savingOP"];
    
            $savingValue = $_SESSION['savingValue'];

            if ($operation === "add") {
                // Add the posted value to the stored value
                $savingValue += $value;
            } elseif ($operation === "subtract") {
                // Check if the withdrawal amount exceeds the available balance
                if ($value > $savingValue) {
                    $result = "Insufficient funds for withdrawal.";
                } else {
                    $savingValue -= $value;
                }
            } else {
                $result = "Invalid operation";
            }

            $_SESSION['savingValue'] = $savingValue;
        } 
    }

    $currentValue = isset($_SESSION['currentValue']) ? $_SESSION['currentValue'] : 0;
    $savingsValue = isset($_SESSION['savingValue']) ? $_SESSION['savingValue'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-left: 120px;
            margin-top: 50px;
        }
        .wrapper{
            display: grid;
            grid-template-columns: 300px 300px;
        }
        .account{
            border: 1px solid black;
            padding: 10px;
        }
        .label{
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        label{
            font-weight: bold;
        }
        input{
            width: 100px;
        }

    </style>
</head>
<body>
<?php include __DIR__ . '/../include/header.php'; ?>

    <h1>ATM</h1>
    <div class="wrapper">
        <form method="POST">
            <div class="account"> <!-- Checking account -->
                <h2>Checking Account</h2>
                <li>Account ID: #123</li>
                <li>Balance: $<?php echo number_format($currentValue, 2);?></li>
                <li>Account Opened: 12/13/2006</li></br>
                

                <input type="number" name="checkingValue" placeholder="Enter amount"> <span name="error"></span></input>
                <button type="submit" name="checkingOP" value="subtract">Withdraw</button>
                <button type="submit" name="checkingOP" value="add">Deposit</button>
            </div>
            <div class="account"> <!-- Saving account -->
                <h2>Savings Account</h2>
                <li>Account ID: #123</li>
                <li>Balance: $<?php echo number_format($savingsValue, 2);?></li>
                <li>Account Opened: 3/25/2014</li></br>

                <input type="number" name="savingValue" placeholder="Enter Amount"></input>
                <button type="submit" name="savingOP" value="subtract">Withdraw</button>
                <button type="submit" name="savingOP" value="add">Deposit</button>
            </div>

        </form>
    </div>


</body>
</html>