<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add csss file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Add fontawesome icons -->
    <link rel="icon" href="./img/logo.png">

    <!-- boostrap 5-->

    <title>SMS</title>

    <!-- tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <?php include('./common/Nav.php'); ?>

    <?php include('./db/config.php') ?>
    <div class="login-page " >

    <?php

    $table = "  <table class='table-fixed'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>";

    
    $sql = "select * from student";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $table .= "<tbody>";
                  
        $table .="<tr>";
        $table .= "<td>". $row['name'] ."</td>";
        $table .= "<td>". $row['email'] ."</td>";
        $table .= " <td> <button class=' bg-green-400  p-2 rounded '><a href='Update.php?up=".$row['id']."'>Update</a></button> <button class=' bg-red-400  p-2 rounded '><a href='delete.php?delete=".$row['id']."'>Delete</a></button></td>";
        $table .= "</tr>";
        $table .="</tbody>";    
    }
    
    $table .= "</table>";
    
    
    ?>

           <?php echo $table?>
           
    </div>
    <?php include('./common/fotter.php'); ?>
</body>

</html>