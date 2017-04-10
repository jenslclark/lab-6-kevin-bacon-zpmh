<?php

function DataBaseConnection(){
/*** connection credentials *******/
$servername = "www.watzekdi.net";
$username = "watzekdi_cs393";
$password = "KevinBac0n";
$database = "watzekdi_imdb";
$dbport = 3306;


/****** connect to database **************/

try {
    /* this line actually makes the connection */
$db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8;port=$dbport", $username, $password);
}
catch(PDOException $e) {
echo $e->getMessage();
} 
return $db;
}

function getActorId($db, $firstname, $lastname){
    try{
    $statement = $db->prepare("SELECT * FROM actors WHERE first_name LIKE :firstName and last_name:lastName order by film_count desc limit 1");
    $data=array(":firstName"=>"$firstname%", ":lastName"=>"$lastname");
    $statement->execute($data);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    //actors ID is in row 0, so only return that ID
    $id = $rows[0]["id"];
    
    return $id;
    }
    catch(Exception $e) {
        return false;
    }
}

function getMovieId(){
    try{
    $statement = $db->prepare("SELECT * FROM movies JOIN roles ON roles.movie_id=movies.id WHERE roles.actor_id=:ID ORDER BY year DESC, name ASC");
    $data=array(":ID"=>$id);
    $statement->execute($data);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return $rows;
    }
    catch(Exception $e) {
        return false;
    }
}

function getBaconMovies($db, $id, $kevinb){
    try{
    $statement = $db->prepare("SELECT * FROM movies m JOIN roles r1 ON r1.movie_id=m.id JOIN roles r2 ON r2.movie_id=m.id WHERE r1.actor_id=:ID AND r2.actor_id=:kbID ORDER BY year DESC, name ASC");
    $data=array(":ID"=>$id, ":kbID"=>$kevinb);
    $statement->execute($data);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    return rows;
    }
    catch(Exception $e){
        return false;
    }
}
function formatTable($rows){
    try{
    $count =1;
    ?>
    <table class="movieList">
        <caption>Movies listed by title and year</caption>
        <tr>
            <th>#</th><th>Title</th><th>Year</th>
        </tr>
        <?php
            foreach ($rows as $row){
                $name = $row["name"];
                $year = $row["year"];
        ?>
        <tr>
            <td><?= $count ?></td><td><?= $name ?></td><td><?= $year ?></td>
        </tr>
        
        <?php
            $count ++; }
        ?>
    </table>
    <?php
    }
    catch(Exception $e){
        return false;
    }
}
?>
