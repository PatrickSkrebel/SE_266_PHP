<?php

    include (__DIR__ . '/db.php');
    
    // Get listing of all teams
    function getPeople () {
        global $db; // Grabs database
        
        $results = [];

        $stmt = $db->prepare("SELECT id, firstName, lastName, birthdate, height, weight, married FROM people ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) // Checks for errors 
        {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);// Executes the data
                 
         }
         
         return ($results);
    }

    //Add a team to database
    function addPeople ($firstName, $lastName, $birthdate, $height, $weight, $married) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO people SET firstName = :fN, lastName = :lN, birthdate = :bd, height = :h, weight = :w, married = :m");

        $binds = array(
            ":fN" => $firstName,
            ":lN" => $lastName,
            ":bd" => $birthdate,
            ":h" => $height,
            ":w" => $weight,
            ":m" => $married
        );
        
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   
    // // Alternative style to add team records database.
    // function addTeam2 ($firstName, $lastName, $birthdate, $height, $weight, $married) {
    //     global $db;
    //     $results = "Not added";

    //     $stmt = $db->prepare("INSERT INTO teams SET teamName = :team, division = :division");
       
    //     $stmt->bindValue(':team', $team);
    //     $stmt->bindValue(':division', $division);
       
    //     if ($stmt->execute() && $stmt->rowCount() > 0) {
    //         $results = 'Data Added';
    //     }
       
    //     $stmt->closeCursor();
       
    //     return ($results);
    // }
   
    //   $result = addTeam2 ('Ajax', 'Eredivisie');
    //   echo $result;
    

?>