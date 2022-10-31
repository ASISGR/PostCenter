<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
    error_reporting (E_ALL ^ E_NOTICE);


    include_once 'delete_post.php';
    include_once 'update_post.php';
    $sqlquery = "SELECT * FROM posts"; // dimiourgia query
    $relust = mysqli_query($conn, $sqlquery);
    $counts = mysqli_num_rows($relust);
    if( isset($result->num_rows) && $result->num_rows <= 0)
    {
        echo "<div class=\"container-news\">";
        echo '<p>Δεν υπάρχουν δημοσιεύσης!</p>';
        echo "</div>";
    }
    else
    {
        echo '<div class="alert alert-info" role="alert"><i class="fa fa-address-book" style="color:black"aria-hidden="true"></i> Συνολικές δημοσιεύσης: ('. $counts .')</div>';
  
        while($row = mysqli_fetch_array($relust)) // diavazei oles tis grammes pou exoun apothikeuti stin vasi
        {
        echo '
        <form class="container-news" method="POST" action="">
        <div class="extensions-buttons" >
        <p><i class="fa fa-user-circle-o" aria-hidden="true"> | </i>    ' .$row['ID']. ' </p>
        <button class="btn" name="Btn-Update" formaction="allnews.php?ID='.$row['ID'].'" ><i class="fa fa-cog" aria-hidden="true"></i></button>
        <button class="btn" name="Btn-Delete" formaction="allnews.php?ID='.$row['ID'].'" ><i class="fa fa-trash"></i></button>
        </div>
            <p><i class="fa fa-envelope-open-o" aria-hidden="true"> </i> ' .$row['POST']. '</p>
        </form>

            ';
        }

    }      
?>