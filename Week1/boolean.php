<?php
        $task = [
            'title' => 'The Game',
            'due' => '3 weeks',
            'assigned to' => 'Patrick',
            'complete' => false
        ];

       // $task['name'] = 'Jeff'; // adds an item to the array

       // unset($task['age']); // removes an item from the array

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task for the day</h1>
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title']; ?>
            </li>


            <li>
                <strong>Due Date: </strong> <?= $task['due']; ?>
            </li>

            <li>
                <strong>Person Responsible: </strong> <?= $task['assigned to']; ?>
            </li>

            <li>
                <strong>Status: </strong> 

                <?php 
                if ($task['complete']) : ?>
                    <span class="icon">&#9989;</span>

                <?php else: ?>
                    <span class="icon">&#10060;</span>
                <?php endif; ?>
            </li>

        </ul>
</body>
</html>