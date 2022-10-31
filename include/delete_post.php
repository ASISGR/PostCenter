<?php 
    $DeleteID = $_GET['ID'];
    $sqlquery = "DELETE FROM posts WHERE ID = '".$DeleteID."'";

    if(isset($_POST['Btn-Delete']))
    {
        if(mysqli_query($conn,$sqlquery))
        {
            echo '
            <div class="alert alert-success" role="alert">
            <p>Αφαιρέσατε την δημοσίευση.</p>
            </div>
            ';

        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn); //error an to query einai lathos
          }
    }
?>

