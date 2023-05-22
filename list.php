<?php
include "config.php";

$sql = "SELECT * FROM workshop";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trouver un stage</title>
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>


      section{
         padding:130px 70px 0px 70px;
      }
         header ul li a:hover{
        color: white !important;
      }
       .btn-success{
        border:none !important;
       }
   

    </style>
</head>
<body>



   <section class="container">
      <h1>liste des inscrits :</h1>
      <form action="Ajouter.php" method="POST">
      <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>full Name</th>
      <th>email</th>
      <th>phone</th>
      <th>workshop title</th>
      <th>payment method</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>   
                            <tr>
                            <td><?php echo $row ['id']; ?></td>
                                <td><?php echo $row ['fullname']; ?></td>
                                <td><?php echo $row ['email']; ?></td>
                                <td><?php echo $row ['telephone']; ?></td>
                                <td><?php echo $row ['payment']; ?></td>
                                <td><?php echo $row ['title']; ?></td>
                               
                            </tr>  
                     <?php   }
                    }
                ?>
  </tbody>
</table>
      </form>

<button type="button" class="btn btn-success"> <a class="btn btn-success" id="ajout"  href="inscrire.php">s'inscrire</a></button>

          </section>
         
</body>
</html>