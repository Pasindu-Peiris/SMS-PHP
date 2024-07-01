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

    <div class="login-page">

        <div class="box-login">

            <div class="inner-block">

               <div class="heding">
               <h1>LOG IN</h1>
               </div>

                <form action="Login.php" method="post">

                    <div class="textbox">
                        <input type="text" placeholder="Enter Username" name="username" value="">
                    </div>
                    <div class="textbox">
                        <input type="password" placeholder="Enter Password" name="password" value="">
                    </div>
                    <input type="submit" class="btn" value="Log in">

                </form>
                
            </div>

        </div>

    </div>

</body>

</html>