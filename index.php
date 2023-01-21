<!doctype html>
<?php 
include "db.php" ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>midousuji-map</title>
  </head>
  <body>
    <div class="container py-4">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">施設</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Fetech user data based on id
                $offices = 
                mysqli_query($db, 
                "SELECT offices.name,offices.id
                FROM offices
                JOIN facilities ON offices.id=facilities.office_id
                WHERE facilities.name='屋内' AND facilities.acceptance_status=3;");
                $count=1;
                while($user_data = mysqli_fetch_array($offices))
                {
                    $id = $user_data['id'];
                    $name = $user_data['name'];
                echo <<< HEREDOC
                <tr>
                    <th scope="row">{$count}</th>
                    <td>{$id}</td>
                    <td>{$name}</td>
                </tr>
                HEREDOC;
                $count++;
                }
            ?>
            </tr>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>