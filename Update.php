<?php include('./db/config.php') ?>

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



    <?php

    $id = $_GET['up'];


    if(!isset($id)){
        echo '';
    }else{ $sql = "select * from student where id = $id";

        $result = mysqli_query($con, $sql);
    
        $row = mysqli_fetch_assoc($result);
    
        $name1 = $row['name'];
        $name2 = $row['email'];
        $name4  = $row['age'];
        $name3  = $row['addr'];
    }

   


    ?>

    <div class="login-page " id="add-page">



        <div class="box-login add-page">

            <div class="inner-block">

                <div class="heding">
                    <h1>Update Student</h1>
                </div>

                <form action="" method="post">

                    <div class="textbox">
                        <input type="text" placeholder="Enter Username" value='<?php echo $name1 ?>' name="username" value="">
                    </div>
                    <div class="textbox">
                        <input type="text" placeholder="Enter email" value='<?php echo $name2 ?>' name="email" value="">
                    </div>

                    <div class="textbox">
                        <input type="text" placeholder="Enter Address" value='<?php echo $name3 ?>' name="address" value="">
                    </div>

                    <div class="textbox">
                        <input type="number" placeholder="Enter Age" value='<?php echo $name4 ?>' name="age" value="">
                    </div>
                    <input type="submit" class="btn" name="submit" value="Submit">

                </form>

            </div>

        </div>

    </div>

    <?php

    if (isset($_POST['submit']) && !empty($_POST['username']) && $_POST['email'] && $_POST['address'] && $_POST['age']) {

        $name = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $age = $_POST['age'];

        $sql = "UPDATE student
                SET name = '$name', email = '$email', age = '$age', addr ='$address'
                WHERE id = $id ";

        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location: ./view.php?status='done'");
            // echo "Record added successfully";
        } else {
            echo "not added";
        }

        
    }


    $con->close();

    ?>

    <?php include('./common/fotter.php'); ?>

</body>

</html>