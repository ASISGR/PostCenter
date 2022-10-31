<?php
error_reporting (E_ALL ^ E_NOTICE); // kleinei ta warnings

include_once 'include/db_conn.inc.php'; // sundesh sthn vash dedomenwn 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Center Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="logo">WebDevProject</div>
        <ul>
            <li><a href="/index.php">Ανάρτηση</a></li>
            <li><a href="/pages/allnews.php">Δημοσιεύσεις</a></li>
        </ul>
    </nav>
    <div class="container">
    <h1>Ανάρτηση στο Post Center</h1>
        <?php
            include_once 'include/post.php'; // kalw to php kwdika
        ?>
      <form method="POST" action="">
        <div class="container-input">
            <input class="inputtext" name="ContentPost" type="text" placeholder="Τι σκέφτεσαι;">
        </div>
        <div class="container-input">
            <button type="submit" name="SubmitPost" class="btn btn-primary">Δημοσίευση</button>
        </div>
    </form>
    </div>

</body>

</html>