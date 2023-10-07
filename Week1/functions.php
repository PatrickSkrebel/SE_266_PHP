<?php
    $animals = ['dog', 'cat'];

    function dd($data)
    {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
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
    <input id="age" value='12'> <button id='btn'>Submit</button>
    
    <script>
        var age = 12;
        var btn;



        if(age < 21)
        {
            
            
        }
    </script>
        <?php
                dd($animals)
        ?>


</body>
</html>