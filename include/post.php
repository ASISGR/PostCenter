<?php
    $ContentPost = mysqli_real_escape_string($conn,$_POST['ContentPost']); // perni ta dedomena apo tin forma + fix sql injection. 

    if(isset($_POST['SubmitPost'])) // Otan patisis to koumpi
    {
        if(strlen($ContentPost) <= 0) // an to kimeno exei ligotero apo 0 xaraktires
        {
            echo '
            <div class="alert alert-warning" role="alert">
            Συμπλήρωσε πρώτα την φόρμα δημοσίευσης!</div>';
            return 0; // den sinexizi to programma
        }
        $sqlquery = "INSERT INTO posts(POST) VALUES ('$ContentPost')"; // dimiourgia toy query

        if (mysqli_query($conn, $sqlquery)) { // trexei to query
            echo '
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Συγχαρητήρια!</h4>
            <p>Μόλις δημοσιεύσατε μια ανάρτηση.</p>
            </div>
                ';
          } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn); //error an to query einai lathos
          }
    }      
?>