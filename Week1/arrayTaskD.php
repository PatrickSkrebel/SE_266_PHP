<?php
        $task = [
            'title' => 'The Game',
            'due:' => '3 weeks',
            'assigned to:' => 'Patrick',
            'complete' => 'yes'
        ];

        $person = [
            'age' => 31,

            'hair' => 'brown',

            'career' => 'web developer'
        ];

        $person['name'] = 'Jeff'; // adds an item to the array

        unset($person['age']); // removes an item from the array

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assiciative Arrays</title>
</head>
<body>
        <ul>
            <?php foreach ($task as $key => $feature):?>
                <li><strong><?=$key; ?></strong> <?=$feature; ?></li>
            <?php endforeach; ?>
        </ul>
</body>
</html>