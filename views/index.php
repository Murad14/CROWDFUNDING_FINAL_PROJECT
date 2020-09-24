<?php
require_once('../services/postService.php');
require_once('../services/userService.php');

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../views/assets/donor/css/style.css">



    <title>Home</title>




</head>

<body>


    <section>
        <nav>
            <a href="#" class="logo">Crowd Funding</a>
            <ul>
                <li><a href="index.php" class="active">Home </a></li>
                <li><a href="registration.php">Sign up</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="about_us.html">About Us</a></li>
            </ul>
        </nav>
    </section>

    <div class="postarea">
        <div class="title">
            <h1 align="center">Raisers Posts</h1>
        </div>

        <?php
        $posts = getposts();

        ?>

        <center>
            <div class="postcards">
                <?php for ($i = 0; $i != count($posts); $i++) { ?>
                    <div class="card">
                        <img width="220px" src="./assets/pics/xxx.jpg" alt="Avatar">

                        <h4><b><?= $posts[$i]['post_title'] ?></b></h4>
                        <p><?= $posts[$i]['user_name'] ?></p>
                        <a href="guest_postdetails.php?postid=<?= $posts[$i]['post_id'] ?>" class="myButton">Details</a>


                    </div>

                <?php } ?>

            </div>
        </center>

    </div>




    </div>
    </center>



    </div>

</body>

</html>
