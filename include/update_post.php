<?php 
    $ContentPost = mysqli_real_escape_string($conn,$_POST['Btn-Update']);
    $UpdateID = $_GET['ID'];
    $sqlquery = "UPDATE posts set post ='".$ContentPost."' WHERE ID = '".$UpdateID."'";
    if(isset($_POST['Btn-Update']))
    {
        echo '
        <div class="container-update">
        <h1>Επεξεργασία άρθρου Post Center</h1>
          <form method="POST" action="">
            <div class="container-input">
                <input class="inputtext" name="Btn-Update" type="text" placeholder="Νέο κείμενο..">
            </div>
            <div class="container-input">
                <button type="submit" name="SubmitPost" class="btn btn-primary">Επεξεργασία</button>
                <button type="submit" name="close" class="btn btn-primary">Ακυρο</button>
            </div>
        </form>
        </div>
        ';
        if(isset($_POST['SubmitPost']))
        {
            if(strlen($ContentPost) <= 0) // an to kimeno exei ligotero apo 0 xaraktires
            {
                echo '
                <div class="alert alert-warning" role="alert">
                Συμπλήρωσε πρώτα την φόρμα δημοσίευσης!</div>';
                return 0; // den sinexizi to programma
            }
    
            if(mysqli_query($conn,$sqlquery))
            {
                echo '
                <div class="alert alert-success" role="alert">
                <p>Επεξεργαστήκατε το άρθρο.</p>
                </div>
                ';
                echo '<style>.container-update { display:none;}</style>';
            } else {
                echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn); //error an to query einai lathos
            }
        }

        if(isset($_POST['close']))
        {
           echo '<style>.container-update { display:none;}</style>';
        }
    }   
?>  

