<?php
    ini_set('display_errors', 1);
    $score = null;
    $userName = null;

    /* Connection Variable ("Servername",
    "username","password","database") */
    $con = mysqli_connect("localhost", 
            "ambrose", "373917", "leaderboard");

    // print_r($_REQUEST);echo "<br>";
    // set variables we want to send to database
    if (isset($_POST['userName'])) {
        $userName = $_POST['userName'];
        // echo "Your Username: "; print_r($userName);
    } else {
        // echo "Did not recieve a vaild userName <br>";
    }
    if (isset($_POST['score'])) {
        $tempscore = $_POST['score'];
        $score = (int)$tempscore;
        // echo "<br>Your Score: "; print_r($score);
    } else {
        // echo "Did not recieve a vaild score <br><br>";
    }

    if (isset($_POST['userName']) || isset($_POST['score'])) {
        //sql query to insert a row into sales table
        $query = "INSERT INTO leaderboard (userName,score) VALUES ('$userName',$score)";
        if (mysqli_query($con, $query)) {
            // echo "<br>Record Inserted Successfully";
        } else {
            echo "Error:" . mysqli_error($con);
        }
    }

    /* Mysqli query to fetch rows 
    in descending order of marks */
    $result = mysqli_query($con, "SELECT userName, 
    score FROM leaderboard ORDER BY score DESC");
        
    /* First rank will be 1 and 
        second be 2 and so on */
    $ranking = 1;
        
    /* Fetch Rows from the SQL query */
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_array($result)) {
            if ($ranking <= 10) {
                echo $ranking . ', ' . $row['userName'] . ', ' . $row['score'] . '<br>';
                // echo "<tr><td>{$ranking}</td>
                // <td>{$row['userName']}</td>
                // <td>{$row['score']}</td></tr>";
                $ranking++;
            } else {
                $chump = $row['score'];
                $deleteQuery = "DELETE FROM leaderboard WHERE score < $chump";
                if (mysqli_query($con, $deleteQuery)) {
                    echo $chump . " DELETED SUCCESSFULLY";
                } else {
                    echo "<br>ERROR: " . mysqli_error($con);
                }
            }

        }
    }
    mysqli_close($con);
?>