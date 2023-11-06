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
    
    function updatePatient ($id, $firstName, $lastName, $married, $birthdate, $height, $weight) {
        global $db;

        $results = "";
        $sql = "UPDATE people SET firstName = :fN, lastName = :lN, birthdate = :bd, height = :h, weight = :w, married = :m WHERE id=:id ";
        $stmt = $db->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':fN', $firstName);
        $stmt->bindValue(':lN', $lastName);
        $stmt->bindValue(':bd', $birthdate);
        $stmt->bindValue(':h', $height);
        $stmt->bindValue(':w', $weight);
        $stmt->bindValue(':m', $married);

      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Updated';
        }
        
        return ($results);
    }

    function deletePatient ($id) {
        global $db;
        
        $results = "Data was not deleted";
        $stmt = $db->prepare("DELETE FROM people WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Deleted';
        }
        
        return ($results);
    }

    function getPerson($id){

        global $db;
        
        $result = [];
        $stmt = $db->prepare("SELECT * FROM people WHERE id=:id");
        $stmt->bindValue(':id', $id);
       
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        
         }
         
         return ($result);
    }

?>