<?php
    $animals = ['dog', 'cat'];

    function dd($age)
    {
        if($age >= 21)
        {
            echo "You are 21! Welcome";
            
        }else{
            echo "Not old enough! Sorry";
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

    <?php
        dd(23);
    ?>


</body>
</html>