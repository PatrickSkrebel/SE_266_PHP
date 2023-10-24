<?php

abstract class Account {
    protected $accountId, $balance, $startDate;

    public function __construct($id, $b, $sd)
    {
        $accountId = $id;
        $balance = $b;
        $startDate = $sd;
    }

    public function deposit($amount)
    {

    }

    abstract public function withDrawel($amount);

    public function getStartDate()
    {

    }

    public function getBalance(){

    }

    public function getAccountId(){

    }

    protected function getAccountDetails()
    {
        return $str;
    }
}

class CheckingAccount extends Account{
    const OVERDRAW_LIMIT = -200;    

    public function withDrawel($amount){

    }

    public function getACcountDetails(){
        $str = "<h2>Checking Account</h2>";
        $str .= parent::getAccountDetails();

        return $str;
    }
}

class SavingsAccount extends Account{
    public function withDrawel($amount){

    }

    public function getAccountDetails(){
        $str = "<h2>Saving Account</h2>";
        $str .= parent::getAccountDetails();

        return $str;
    }
}

// new checking class
$checking = new CheckingAccount ('123', 1000, '3-3-2006');
$checking->withDrawel(200);
$checking->deposit(500);


$savings = new SavingsAccount('123', 5000, '5-13-2014');

echo $checking->getAccountDetails();
echo $savings->getAccountDetails();
echo $checking->getStartDate();


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
                <li>Balance: </span></li>
                <li>Account Opened: 12/13/2006</li></br>

                <input type="text" name="checkingWithdraw"></input>
                <button type="POST" name="submitWithdraw">Withdraw</button></br></br>
                <input></input>
                <button type="submit" name="submit">Deposit</button>
            </div>
            <div class="account"> <!-- Saving account -->
                <h2>Savings Account</h2>
                <li>Account ID: #123</li>
                <li>Balance: </li>
                <li>Account Opened: 3/25/2014</li></br>

                <input></input>
                <button >Withdraw</button></br></br>
                <input></input>
                <button>Deposit</button>
            </div>

        </form>
    </div>


</body>
</html>