<?php
    function fizzBuzz($num)
    {
        for($i = 1; $i <= 100; $i++) // Runs the code 100 times 
        {
            if($i % 6 == 0){ // if the values equal both 3&5 FizzBuzz
                echo $i . " is FizzBuzz<br />";
             }
             else if($i % 2 == 0){ // if just 3 Fizz
                echo $i . " is Fizz<br />";
             }
             else if($i % 3 == 0){ // if just 5 Buzz
                echo $i . " is Buzz<br />";
             }
             else {
                echo $i."<br />";
             }
        }
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
<?php include __DIR__ . '/../include/header.php'; ?>
    <h1>fizzBuzz</h1>
    
    <?php
        fizzBuzz(0)// run forloop
    ?>

</body>
</html>

